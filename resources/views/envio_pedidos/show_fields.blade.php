<!-- Estado Field -->
<div class="form-group">
    {!! Form::label('Estado', 'Estado:') !!}
    <p>{{ $envioPedido->Estado }}</p>
</div>

<!-- Numero Field -->
<div class="form-group">
    {!! Form::label('Numero', 'Numero:') !!}
    <p>{{ $envioPedido->Numero }}</p>
</div>

<!-- Descripcion Field -->
<div class="form-group">
    {!! Form::label('Descripcion', 'Descripcion:') !!}
    <p>{{ $envioPedido->Descripcion }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $envioPedido->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $envioPedido->updated_at }}</p>
</div>

