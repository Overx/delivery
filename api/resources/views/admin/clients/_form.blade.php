<div class="row">
    <div class="col-sm-3">
        <div class="form-group form-group-default required">
            {!! Form::label('name', 'Nome') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'required']) !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group form-group-default">
            {!! Form::label('password', 'Senha') !!}
            {!! Form::password('password', ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group form-group-default required">
            {!! Form::label('email', 'E-mail') !!}
            {!! Form::email('email', null, ['class' => 'form-control', 'required']) !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-3">
        <div class="form-group form-group-default form-group-default-select2">
            {!! Form::label('role', 'Função') !!}
            {!! Form::select('role', array(
                'client' => 'Cliente',
                'deliveryman' => 'Entregador',
                'admin' => 'Administrador'
                ), null, ['class' => 'full-width', 'data-init-plugin' => 'select2']) !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group form-group-default">
            {!! Form::label('name', 'Telefone') !!}
            {!! Form::text('phone', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group form-group-default">
            {!! Form::label('email', 'Endereço') !!}
            {!! Form::text('address', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-6">
        <div class="form-group form-group-default">
            {!! Form::label('city', 'Cidade') !!}
            {!! Form::text('city', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group form-group-default">
            {!! Form::label('state', 'Estado') !!}
            {!! Form::text('state', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group form-group-default">
            {!! Form::label('zipcode', 'Cep') !!}
            {!! Form::text('zipcode', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>