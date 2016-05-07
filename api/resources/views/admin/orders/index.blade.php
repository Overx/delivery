@extends('layout')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-transparent">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="{{ route('admin.orders.create') }}" class="btn btn-success"> Novo Pedido</a>
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
                                <th style="width:20%">Total</th>
                                <th style="width:10%">Status</th>
                                <th style="width:30%" class="text-center">Ação</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(count($orders) > 0)
                                @foreach($orders as $order)
                                    <tr>
                                        <td class="v-align-middle semi-bold">{{ $order->client->name }}</td>
                                        <td class="v-align-middle semi-bold">{{ $order->deliveryman->name }}</td>
                                        <td class="v-align-middle">{{ $order->total }}</td>
                                        <td class="v-align-middle semi-bold">{!! \LineXTI\Helpers\Core::renderStatus($order->status) !!}</td>
                                        <td class="v-align-middle text-center">
                                            <a href="{{ route('admin.orders.items', ['id' => base64_encode($order->id)]) }}" class="btn btn-success btn-xs"><i class="fa fa-plus"></i> Add Items</a>
                                            <a href="{{ route('admin.orders.edit', ['id' => base64_encode($order->id)]) }}" class="btn btn-default btn-xs"><i class="fa fa-edit"></i> Editar</a>
                                            <a href="{{ route('admin.orders.destroy', ['id' => base64_encode($order->id)]) }}" class="btn btn-danger btn-xs"><i class="fa fa-times"></i> Apagar</a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr class="text-center">
                                    <td colspan="8">Sem pedidos</td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-6"></div>
                        <div class="col-md-6">
                            <div class="pull-right">{!! $orders->render() !!}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection