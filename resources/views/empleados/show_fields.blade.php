<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('Nombre', 'Nombre:') !!}
    <p>{{ $empleados->Nombre }}</p>
</div>

<!-- Apellido Paterno Field -->
<div class="form-group">
    {!! Form::label('Apellido_Paterno', 'Apellido Paterno:') !!}
    <p>{{ $empleados->Apellido_Paterno }}</p>
</div>

<!-- Edad Field -->
<div class="form-group">
    {!! Form::label('Edad', 'Edad:') !!}
    <p>{{ $empleados->Edad }}</p>
</div>

<!-- Correo Field -->
<div class="form-group">
    {!! Form::label('Correo', 'Correo:') !!}
    <p>{{ $empleados->Correo }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $empleados->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $empleados->updated_at }}</p>
</div>

