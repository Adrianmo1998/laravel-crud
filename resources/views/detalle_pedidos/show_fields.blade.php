<!-- Cantidad Field -->
<div class="form-group">
    {!! Form::label('Cantidad', 'Cantidad:') !!}
    <p>{{ $detallePedido->Cantidad }}</p>
</div>

<!-- Estadopedido Field -->
<div class="form-group">
    {!! Form::label('EstadoPedido', 'Estadopedido:') !!}
    <p>{{ $detallePedido->EstadoPedido }}</p>
</div>

<!-- Gas Field -->
<div class="form-group">
    {!! Form::label('Gas', 'Gas:') !!}
    <p>{{ $detallePedido->Gas }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $detallePedido->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $detallePedido->updated_at }}</p>
</div>

