<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Nombre', 'Nombre:') !!}
    {!! Form::text('Nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Apellido Paterno Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Apellido_Paterno', 'Apellido Paterno:') !!}
    {!! Form::text('Apellido_Paterno', null, ['class' => 'form-control']) !!}
</div>

<!-- Edad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Edad', 'Edad:') !!}
    {!! Form::number('Edad', null, ['class' => 'form-control']) !!}
</div>

<!-- Correo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Correo', 'Correo:') !!}
    {!! Form::text('Correo', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('empleados.index') }}" class="btn btn-default">Cancel</a>
</div>
