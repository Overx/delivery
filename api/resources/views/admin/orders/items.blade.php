@extends('layout')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-transparent">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-6">
                            <button id="openAddItem" class="btn btn-success"> Novo Item</button>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('admin.orders')  }}" class="btn btn-info pull-right"> Voltar</a>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-condensed" id="">
                            <thead>
                            <tr>
                                <th style="width:20%">Cliente</th>
                                <th style="width:20%">Entregador</th>
                                <th style="width:20%">Produto</th>
                                <th style="width:10%">Quantidade</th>
                                <th style="width:10%">Valor</th>
                                <th style="width:20%" class="text-center">Ação</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(count($items) > 0)
                                @foreach($items as $item)
                                    <tr>
                                        <td class="v-align-middle semi-bold">{{ $order->client->name  }}</td>
                                        <td class="v-align-middle semi-bold">{{ $order->deliveryman->name }}</td>
                                        <td class="v-align-middle">{{ $item->product->name }}</td>
                                        <td class="v-align-middle">{{ $item->qtd }}</td>
                                        <td class="v-align-middle">{{ $item->price }}</td>
                                        <td class="v-align-middle text-center">
                                            <button class="btn btn-danger btn-xs"><i class="fa fa-times"></i> Apagar</button>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr class="text-center">
                                    <td colspan="8">Sem item cadastrado</td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-6"></div>
                        <div class="col-md-6">
                            <div class="pull-right">{!! $items->render() !!}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<div class="modal fade fill-in" id="modalFillIn" tabindex="-1" role="dialog" aria-hidden="true">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
        <i class="pg-close"></i>
    </button>
    <div class="modal-dialog ">
        <div class="modal-content">
            <form id="createItem" action="" method="post">
                <div class="modal-header">
                    <h5 class="text-left p-b-5"><span class="semi-bold">Cadastrando</span> novo item</h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="form-group form-group-default form-group-default-select2">
                                {!! Form::label('product_id', 'Produtos') !!}
                                {!! Form::select('product_id', array('0' => 'Selecione') + $products, null, ['class' => 'full-width', 'data-init-plugin' => 'select2', 'id' => 'product_id']) !!}
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group form-group-default">
                                {!! Form::label('price', 'Preço') !!}
                                {!! Form::text('price', null, ['class' => 'form-control', 'id' => 'price']) !!}
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="order_id" value="{{ $order->id }}">
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="form-group form-group-default disabled">
                                <label>Produto</label>
                                <input id="produto" type="text" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group form-group-default">
                                {!! Form::label('qtd', 'Quantidade') !!}
                                {!! Form::number('qtd', 1, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="form-group">
                        <button class="btn btn-success pull-right">Salvar</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
