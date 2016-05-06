@extends('layout')
@section('content')

    <ul class="breadcrumb">
        <li><a href="{{ route('admin.products') }}">Produtos</a></li>
        <li><a href="#" class="active">Editar Produto</a></li>
    </ul>

    <div class="row">
        <div class="col-md-12">
            <!-- START PANEL -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">
                        Editar Produto
                    </div>
                </div>
                <div class="panel-body">
                    @if($errors->any())
                        <ul class="alert" style="list-style: none;">
                            @foreach($errors->all() as $erro)
                                <li class="alert alert-danger">{{  $erro }}</li>
                            @endforeach
                        </ul>
                    @endif

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    {!! Form::model($product, ['route' => ['admin.products.update', base64_encode($product->id)], 'method' => 'put']) !!}

                    @include('admin.products._form')

                    <div class="clearfix"></div> <br/><br/>
                    <div class="form-group">
                        {!! Form::submit('Salvar', ['class' => 'btn btn-success pull-right']) !!}
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
            <!-- END PANEL -->
        </div>
    </div>


@endsection