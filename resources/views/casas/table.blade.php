<table class="table table-responsive" id="casas-table">
    <thead>
        <tr>
         <th>Codigo</th>
            <th>Direccion</th>
        <th>Descripcion</th>
       
        <th>Precio</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($casas as $casa)
        <tr>
             <td>{!! $casa->color !!}</td>
            <td>{!! $casa->direccion !!}</td>
            <td>{!! $casa->descripcion !!}</td>
           
            <td>{!! $casa->precio !!}</td>
            <td>
                {!! Form::open(['route' => ['casas.destroy', $casa->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('casas.show', [$casa->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('casas.edit', [$casa->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>