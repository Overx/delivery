<?php

namespace LineXTI\Http\Controllers\Admin;

use Illuminate\Http\Request;

use LineXTI\Http\Requests;
use LineXTI\Http\Controllers\Controller;
use LineXTI\Models\Order;
use LineXTI\Models\OrderItem;
use LineXTI\Models\Product;
use LineXTI\Models\User;

class OrderController extends Controller
{
    /**
     * @var $clients
     */
    protected $orders;

    /**
     * ClientController constructor.
     */
    public function __construct(Order $orders)
    {
        $this->orders = $orders;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'orders' => $this->orders->paginate(5)
        ];
        return view('admin.orders.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::lists('name', 'id')->toArray();
        $deliveryman = User::where('role', 'deliveryman')->lists('name', 'id')->toArray();
        $data = [
            'users' => $users,
            'deliveryman' => $deliveryman
        ];
        return view('admin.orders.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $orders = $this->orders->create($request->all());
        return redirect()->route('admin.orders.items', [base64_encode($orders->id)]);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getItems($id)
    {
        $id = base64_decode($id);
        $script = '<script src="'.\URL::to('/assets/ajax/orders.js').'"></script>';

        if(!empty($id)) {
            $order = $this->orders->find($id);
            $items = OrderItem::where('order_id', $id)->paginate(5);
            $products = Product::lists('name', 'id')->toArray();

            $data = [
                'order' => $order,
                'items' => $items,
                'products' => $products,
                'script' => $script
            ];
            return view('admin.orders.items', $data);
        }else{
            return redirect()->route('admin.orders');
        }
    }

    /**
     * @param Request $request
     */
    public function storeItems(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);

        $orderItem = OrderItem::create($data);

        $price = $orderItem->price;
        $qtd   = $orderItem->qtd;
        $order_id = $orderItem->order_id;

        $order = $this->orders->find($order_id);
        $total = $order->total += ($price * $qtd);
        $order->update(['total' => $total]);

        return \Response::json("sucesso", 200);
    }

    /**
     * @param $id
     */
    public function getProduct($id)
    {
        $product = Product::find($id);
        return \Response::json($product);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
