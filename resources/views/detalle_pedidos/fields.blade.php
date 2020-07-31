<!-- Cantidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Cantidad', 'Cantidad:') !!}
    {!! Form::text('Cantidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Estadopedido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('EstadoPedido', 'Estadopedido:') !!}
    {!! Form::text('EstadoPedido', null, ['class' => 'form-control']) !!}
</div>

<!-- Gas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Gas', 'Gas:') !!}
    {!! Form::text('Gas', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('detallePedidos.index') }}" class="btn btn-default">Cancel</a>
</div>
