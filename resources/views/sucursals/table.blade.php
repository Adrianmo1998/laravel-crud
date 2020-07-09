<div class="table-responsive">
    <table class="table" id="sucursals-table">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Direccion</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($sucursals as $sucursal)
            <tr>
                <td>{{ $sucursal->Nombre }}</td>
            <td>{{ $sucursal->Direccion }}</td>
                <td>
                    {!! Form::open(['route' => ['sucursals.destroy', $sucursal->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('sucursals.show', [$sucursal->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('sucursals.edit', [$sucursal->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
