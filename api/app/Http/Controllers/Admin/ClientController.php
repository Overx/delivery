<?php

namespace LineXTI\Http\Controllers\Admin;

use Illuminate\Http\Request;

use LineXTI\Http\Requests;
use LineXTI\Http\Controllers\Controller;
use LineXTI\Http\Requests\ClientRequest;

// Models
use LineXTI\Models\User;
use LineXTI\Models\Client;

class ClientController extends Controller
{
    /**
     * @var $clients
     */
    protected $users;

    /**
     * ClientController constructor.
     */
    public function __construct(User $users)
    {
        $this->users = $users;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'users' => $this->users->paginate(5)
        ];

        return view('admin.clients.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientRequest $request)
    {
        $dataUser = $request->all();
        if(!empty($dataUser['password'])) {
            $dataUser['password'] = bcrypt($dataUser['password']);
        }

        $user = $this->users->create($dataUser);
        $data = [
            'user_id'   => $user->id,
            'phone'     => (!empty($dataUser['phone']) ? $dataUser['phone'] : '' ),
            'address'   => (!empty($dataUser['address']) ? $dataUser['address'] : '' ),
            'city'      => (!empty($dataUser['city']) ? $dataUser['city'] : '' ),
            'state'     => (!empty($dataUser['state']) ? $dataUser['state'] : '' ),
            'zipcode'   => (!empty($dataUser['zipcode']) ? $dataUser['zipcode'] : '' ),
        ];

        Client::create($data);

        return redirect()->back()->with('status', 'Usuário criado com sucesso!');
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

        $user = $this->users->details()->find($id);
        unset($user->password);

        $data = [
            'user' => $user
        ];

        return view('admin.clients.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $id = base64_decode($id);
        $user = $this->users->find($id);

        $user->client->update($request->all()); // Salva dados do relacionamento
        $user->update($request->all()); // Salva informações do perfil

        return redirect()->back()->with('status', 'Perfil Atualizado com sucesso!');
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
        $this->users->find($id)->delete();
        return redirect()->back()->with('status', 'Perfil Deletado com sucesso!');
    }
}
