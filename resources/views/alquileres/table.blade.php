<table class="table table-responsive" id="alquileres-table">
    <thead>
        <tr>
            <th>Id Casa</th>
        <th>Id Cliente</th>
        <th>Fecha Inicio</th>
        <th>Fecha Entrega</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($alquileres as $alquilere)
        <tr>
            <td>{!! $alquilere->id_casa !!}</td>
            <td>{!! $alquilere->id_cliente !!}</td>
            <td>{!! $alquilere->fecha_inicio !!}</td>
            <td>{!! $alquilere->fecha_entrega !!}</td>
            <td>
                {!! Form::open(['route' => ['alquileres.destroy', $alquilere->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('alquileres.show', [$alquilere->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('alquileres.edit', [$alquilere->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>