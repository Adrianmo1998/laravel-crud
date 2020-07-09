<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('Nombre', 'Nombre:') !!}
    <p>{{ $sucursal->Nombre }}</p>
</div>

<!-- Direccion Field -->
<div class="form-group">
    {!! Form::label('Direccion', 'Direccion:') !!}
    <p>{{ $sucursal->Direccion }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $sucursal->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $sucursal->updated_at }}</p>
</div>

