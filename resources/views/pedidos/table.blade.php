<div class="table-responsive">
    <table class="table" id="pedidos-table">
        <thead>
            <tr>
                <th>Numero</th>
        <th>Hora</th>
        <th>Fecha</th>
        <th>Calle</th>
        <th>Estado</th>
        <th>Factura</th>
        <th>Nombre Cliente</th>
        <th>Telefono Cliente</th>
        <th>Tipo Entrega</th>
        <th>Detalle</th>
        <th>Total</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($pedidos as $pedido)
            <tr>
                <td>{{ $pedido->Numero }}</td>
            <td>{{ $pedido->Hora }}</td>
            <td>{{ $pedido->Fecha }}</td>
            <td>{{ $pedido->Calle }}</td>
            <td>{{ $pedido->Estado }}</td>
            <td>{{ $pedido->Factura }}</td>
            <td>{{ $pedido->Nombre_Cliente }}</td>
            <td>{{ $pedido->Telefono_Cliente }}</td>
            <td>{{ $pedido->Tipo_entrega }}</td>
            <td>{{ $pedido->Detalle }}</td>
            <td>{{ $pedido->Total }}</td>
                <td>
                    {!! Form::open(['route' => ['pedidos.destroy', $pedido->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('pedidos.show', [$pedido->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('pedidos.edit', [$pedido->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
