<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('Nombre', 'Nombre:') !!}
    <p>{{ $proveedores->Nombre }}</p>
</div>

<!-- Apellidos Field -->
<div class="form-group">
    {!! Form::label('Apellidos', 'Apellidos:') !!}
    <p>{{ $proveedores->Apellidos }}</p>
</div>

<!-- Ubicacion Field -->
<div class="form-group">
    {!! Form::label('Ubicacion', 'Ubicacion:') !!}
    <p>{{ $proveedores->Ubicacion }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $proveedores->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $proveedores->updated_at }}</p>
</div>

