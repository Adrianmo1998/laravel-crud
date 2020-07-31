<div class="table-responsive">
    <table class="table" id="estadoPedidos-table">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Descripcion</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($estadoPedidos as $estadoPedido)
            <tr>
                <td>{{ $estadoPedido->Nombre }}</td>
            <td>{{ $estadoPedido->Descripcion }}</td>
                <td>
                    {!! Form::open(['route' => ['estadoPedidos.destroy', $estadoPedido->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('estadoPedidos.show', [$estadoPedido->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('estadoPedidos.edit', [$estadoPedido->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
