<!-- Numero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Numero', 'Numero:') !!}
    {!! Form::number('Numero', null, ['class' => 'form-control']) !!}
</div>

<!-- Hora Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Hora', 'Hora:') !!}
    {!! Form::text('Hora', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Fecha', 'Fecha:') !!}
    {!! Form::text('Fecha', null, ['class' => 'form-control']) !!}
</div>

<!-- Calle Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Calle', 'Calle:') !!}
    {!! Form::text('Calle', null, ['class' => 'form-control']) !!}
</div>

<!-- Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Estado', 'Estado:') !!}
    {!! Form::text('Estado', null, ['class' => 'form-control']) !!}
</div>

<!-- Factura Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Factura', 'Factura:') !!}
    {!! Form::text('Factura', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre Cliente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Nombre_Cliente', 'Nombre Cliente:') !!}
    {!! Form::text('Nombre_Cliente', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefono Cliente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Telefono_Cliente', 'Telefono Cliente:') !!}
    {!! Form::number('Telefono_Cliente', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Entrega Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Tipo_entrega', 'Tipo Entrega:') !!}
    {!! Form::text('Tipo_entrega', null, ['class' => 'form-control']) !!}
</div>

<!-- Detalle Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Detalle', 'Detalle:') !!}
    {!! Form::text('Detalle', null, ['class' => 'form-control']) !!}
</div>

<!-- Total Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Total', 'Total:') !!}
    {!! Form::number('Total', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('pedidos.index') }}" class="btn btn-default">Cancel</a>
</div>
