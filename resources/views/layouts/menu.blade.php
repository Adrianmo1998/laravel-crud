<li class="{{ Request::is('empleados*') ? 'active' : '' }}">
    <a href="{{ route('empleados.index') }}"><i class="fa fa-edit"></i><span>Empleados</span></a>
</li>

<li class="{{ Request::is('clientes*') ? 'active' : '' }}">
    <a href="{{ route('clientes.index') }}"><i class="fa fa-edit"></i><span>Clientes</span></a>
</li>

<li class="{{ Request::is('sucursals*') ? 'active' : '' }}">
    <a href="{{ route('sucursals.index') }}"><i class="fa fa-edit"></i><span>Sucursals</span></a>
</li>

<li class="{{ Request::is('pedidos*') ? 'active' : '' }}">
    <a href="{{ route('pedidos.index') }}"><i class="fa fa-edit"></i><span>Pedidos</span></a>
</li>

<li class="{{ Request::is('proveedores*') ? 'active' : '' }}">
    <a href="{{ route('proveedores.index') }}"><i class="fa fa-edit"></i><span>Proveedores</span></a>
</li>

<li class="{{ Request::is('estadoPedidos*') ? 'active' : '' }}">
    <a href="{{ route('estadoPedidos.index') }}"><i class="fa fa-edit"></i><span>Estado Pedidos</span></a>
</li>

<li class="{{ Request::is('detallePedidos*') ? 'active' : '' }}">
    <a href="{{ route('detallePedidos.index') }}"><i class="fa fa-edit"></i><span>Detalle Pedidos</span></a>
</li>

<li class="{{ Request::is('envioPedidos*') ? 'active' : '' }}">
    <a href="{{ route('envioPedidos.index') }}"><i class="fa fa-edit"></i><span>Envio Pedidos</span></a>
</li>

<li class="{{ Request::is('facturas*') ? 'active' : '' }}">
    <a href="{{ route('facturas.index') }}"><i class="fa fa-edit"></i><span>Facturas</span></a>
</li>

