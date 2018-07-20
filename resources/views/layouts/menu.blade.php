<li class="{{ Request::is('alquileres*') ? 'active' : '' }}">
    <a href="{!! route('alquileres.index') !!}"><i class="fa fa-edit"></i><span>Alquileres</span></a>
</li>

<li class="{{ Request::is('casas*') ? 'active' : '' }}">
    <a href="{!! route('casas.index') !!}"><i class="fa fa-edit"></i><span>Casas</span></a>
</li>

<li class="{{ Request::is('clientes*') ? 'active' : '' }}">
    <a href="{!! route('clientes.index') !!}"><i class="fa fa-edit"></i><span>Clientes</span></a>
</li>

<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>

