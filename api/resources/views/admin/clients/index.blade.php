@extends('layout')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-transparent">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="{{ route('admin.clients.create') }}" class="btn btn-success"> Novo Perfil</a>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-condensed" id="">
                            <thead>
                            <tr>
                                <th style="width:25%">Nome</th>
                                <th style="width:25%">E-mail</th>
                                <th style="width:25%">Função</th>
                                <th style="width:25%" class="text-center">Ação</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td class="v-align-middle semi-bold">{{ $user->name }}</td>
                                        <td class="v-align-middle">{{ $user->email }}</td>
                                        <td class="v-align-middle semi-bold">
                                            {{ LineXTI\Helpers\Core::roleText( $user->role ) }}
                                        </td>
                                        <td class="v-align-middle text-center">
                                            <a href="{{ route('admin.clients.edit', ['id' => base64_encode($user->id)]) }}" class="btn btn-default btn-xs"><i class="fa fa-edit"></i> Editar</a>
                                            <a href="{{ route('admin.clients.destroy', ['id' => base64_encode($user->id)]) }}" class="btn btn-danger btn-xs"><i class="fa fa-times"></i> Apagar</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-6"></div>
                        <div class="col-md-6">
                            <div class="pull-right">{!! $users->render() !!}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection