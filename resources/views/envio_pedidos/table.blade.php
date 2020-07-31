<div class="table-responsive">
    <table class="table" id="envioPedidos-table">
        <thead>
            <tr>
                <th>Estado</th>
        <th>Numero</th>
        <th>Descripcion</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($envioPedidos as $envioPedido)
            <tr>
                <td>{{ $envioPedido->Estado }}</td>
            <td>{{ $envioPedido->Numero }}</td>
            <td>{{ $envioPedido->Descripcion }}</td>
                <td>
                    {!! Form::open(['route' => ['envioPedidos.destroy', $envioPedido->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('envioPedidos.show', [$envioPedido->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('envioPedidos.edit', [$envioPedido->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
