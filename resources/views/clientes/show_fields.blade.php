<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('Nombre', 'Nombre:') !!}
    <p>{{ $clientes->Nombre }}</p>
</div>

<!-- Apellido Paterno Field -->
<div class="form-group">
    {!! Form::label('Apellido_Paterno', 'Apellido Paterno:') !!}
    <p>{{ $clientes->Apellido_Paterno }}</p>
</div>

<!-- Apellido Materno Field -->
<div class="form-group">
    {!! Form::label('Apellido_Materno', 'Apellido Materno:') !!}
    <p>{{ $clientes->Apellido_Materno }}</p>
</div>

<!-- Direccion Field -->
<div class="form-group">
    {!! Form::label('Direccion', 'Direccion:') !!}
    <p>{{ $clientes->Direccion }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $clientes->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $clientes->updated_at }}</p>
</div>

