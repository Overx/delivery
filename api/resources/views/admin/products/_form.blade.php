<div class="row">
    <div class="col-sm-3">
        <div class="form-group form-group-default form-group-default-select2">
            {!! Form::label('category_id', 'Categoria') !!}
            {!! Form::select('category_id', $categories, null, ['class' => 'full-width', 'data-init-plugin' => 'select2']) !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group form-group-default">
            {!! Form::label('price', 'Preço') !!}
            {!! Form::text('price', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group form-group-default">
            {!! Form::label('name', 'Nome') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group form-group-default">
            {!! Form::label('description', 'Descrição') !!}
            {!! Form::text('description', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>