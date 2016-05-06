<div class="row">
    <div class="col-sm-4">
        <div class="form-group form-group-default form-group-default-select2">
            {!! Form::label('client_id', 'Cliente') !!}
            {!! Form::select('client_id', array('0' => 'Selecione') + $users, null, ['class' => 'full-width', 'data-init-plugin' => 'select2']) !!}
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group form-group-default form-group-default-select2">
            {!! Form::label('user_deliveryman_id', 'Entregador') !!}
            {!! Form::select('user_deliveryman_id', array('0' => 'Selecione') + $deliveryman, null, ['class' => 'full-width', 'data-init-plugin' => 'select2']) !!}
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group form-group-default form-group-default-select2">
            {!! Form::label('status', 'Status') !!}
            {!! Form::select('status', array(
                '1' => 'Solicitado',
                '2' => 'Em transito',
                '3' => 'Entregue'
                ), null, ['class' => 'full-width', 'data-init-plugin' => 'select2']) !!}
        </div>
    </div>
</div>