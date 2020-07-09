<!-- Numero Field -->
<div class="form-group">
    {!! Form::label('Numero', 'Numero:') !!}
    <p>{{ $pedido->Numero }}</p>
</div>

<!-- Hora Field -->
<div class="form-group">
    {!! Form::label('Hora', 'Hora:') !!}
    <p>{{ $pedido->Hora }}</p>
</div>

<!-- Fecha Field -->
<div class="form-group">
    {!! Form::label('Fecha', 'Fecha:') !!}
    <p>{{ $pedido->Fecha }}</p>
</div>

<!-- Calle Field -->
<div class="form-group">
    {!! Form::label('Calle', 'Calle:') !!}
    <p>{{ $pedido->Calle }}</p>
</div>

<!-- Estado Field -->
<div class="form-group">
    {!! Form::label('Estado', 'Estado:') !!}
    <p>{{ $pedido->Estado }}</p>
</div>

<!-- Factura Field -->
<div class="form-group">
    {!! Form::label('Factura', 'Factura:') !!}
    <p>{{ $pedido->Factura }}</p>
</div>

<!-- Nombre Cliente Field -->
<div class="form-group">
    {!! Form::label('Nombre_Cliente', 'Nombre Cliente:') !!}
    <p>{{ $pedido->Nombre_Cliente }}</p>
</div>

<!-- Telefono Cliente Field -->
<div class="form-group">
    {!! Form::label('Telefono_Cliente', 'Telefono Cliente:') !!}
    <p>{{ $pedido->Telefono_Cliente }}</p>
</div>

<!-- Tipo Entrega Field -->
<div class="form-group">
    {!! Form::label('Tipo_entrega', 'Tipo Entrega:') !!}
    <p>{{ $pedido->Tipo_entrega }}</p>
</div>

<!-- Detalle Field -->
<div class="form-group">
    {!! Form::label('Detalle', 'Detalle:') !!}
    <p>{{ $pedido->Detalle }}</p>
</div>

<!-- Total Field -->
<div class="form-group">
    {!! Form::label('Total', 'Total:') !!}
    <p>{{ $pedido->Total }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $pedido->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $pedido->updated_at }}</p>
</div>

