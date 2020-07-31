<!-- Fecha Field -->
<div class="form-group">
    {!! Form::label('Fecha', 'Fecha:') !!}
    <p>{{ $factura->Fecha }}</p>
</div>

<!-- Numero Field -->
<div class="form-group">
    {!! Form::label('Numero', 'Numero:') !!}
    <p>{{ $factura->Numero }}</p>
</div>

<!-- Estado Field -->
<div class="form-group">
    {!! Form::label('Estado', 'Estado:') !!}
    <p>{{ $factura->Estado }}</p>
</div>

<!-- Detalle Field -->
<div class="form-group">
    {!! Form::label('Detalle', 'Detalle:') !!}
    <p>{{ $factura->Detalle }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $factura->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $factura->updated_at }}</p>
</div>

