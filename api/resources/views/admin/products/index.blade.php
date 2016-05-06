@extends('layout')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-transparent">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="{{ route('admin.products.create') }}" class="btn btn-success"> Novo Produto</a>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-condensed" id="">
                            <thead>
                            <tr>
                                <th style="width:25%">Nome</th>
                                <th style="width:25%">Categoria</th>
                                <th style="width:25%">Descrição</th>
                                <th style="width:25%">Valor</th>
                                <th style="width:25%" class="text-center">Ação</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $prod)
                                <tr>
                                    <td class="v-align-middle semi-bold">{{ $prod->name  }}</td>
                                    <td class="v-align-middle semi-bold">{{ $prod->category->name  }}</td>
                                    <td class="v-align-middle">{{ str_limit($prod->description, 50)  }}</td>
                                    <td class="v-align-middle semi-bold">{{ $prod->price  }}</td>
                                    <td class="v-align-middle text-center">
                                        <a href="{{ route('admin.products.edit', ['id' => base64_encode($prod->id)]) }}" class="btn btn-default btn-xs"><i class="fa fa-edit"></i> Editar</a>
                                        <a href="{{ route('admin.products.destroy', ['id' => base64_encode($prod->id)]) }}" class="btn btn-danger btn-xs"><i class="fa fa-times"></i> Apagar</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-6"></div>
                        <div class="col-md-6">
                            <div class="pull-right">{!! $products->render() !!}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection