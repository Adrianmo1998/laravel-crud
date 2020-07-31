<!-- Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Estado', 'Estado:') !!}
    {!! Form::text('Estado', null, ['class' => 'form-control']) !!}
</div>

<!-- Numero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Numero', 'Numero:') !!}
    {!! Form::text('Numero', null, ['class' => 'form-control']) !!}
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Descripcion', 'Descripcion:') !!}
    {!! Form::text('Descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('envioPedidos.index') }}" class="btn btn-default">Cancel</a>
</div>
