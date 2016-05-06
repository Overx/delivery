<?php

namespace LineXTI\Http\Controllers\Admin;

use Illuminate\Http\Request;

use LineXTI\Http\Requests;
use LineXTI\Http\Controllers\Controller;
use LineXTI\Models\Category;
use LineXTI\Models\Product;

class ProductController extends Controller
{
    /**
     * @var $clients
     */
    protected $product;

    /**
     * ClientController constructor.
     */
    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'products' => $this->product->paginate(5)
        ];
        return view('admin.products.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::lists('name', 'id')->toArray();
        $data = [
            'categories' => $categories
        ];
        return view('admin.products.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = $this->product->create($request->all());
        return redirect()->back()->with('status', 'Produto criado com sucesso!');
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
        $id = base64_decode($id);

        $product = $this->product->find($id);
        $categories = Category::lists('name', 'id')->toArray();

        $data = [
            'product' => $product,
            'categories' => $categories
        ];

        return view('admin.products.edit', $data);
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
        $id = base64_decode($id);
        $product = $this->product->find($id);
        $product->update($request->all());

        return redirect()->back()->with('status', 'Produto Atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id = base64_decode($id);
        $this->product->find($id)->delete();
        return redirect()->back()->with('status', 'Produto Deletado com sucesso!');
    }
}
