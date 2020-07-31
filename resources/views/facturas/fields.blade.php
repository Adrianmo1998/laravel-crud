<!-- Fecha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Fecha', 'Fecha:') !!}
    {!! Form::text('Fecha', null, ['class' => 'form-control']) !!}
</div>

<!-- Numero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Numero', 'Numero:') !!}
    {!! Form::text('Numero', null, ['class' => 'form-control']) !!}
</div>

<!-- Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Estado', 'Estado:') !!}
    {!! Form::text('Estado', null, ['class' => 'form-control']) !!}
</div>

<!-- Detalle Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Detalle', 'Detalle:') !!}
    {!! Form::text('Detalle', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('facturas.index') }}" class="btn btn-default">Cancel</a>
</div>
