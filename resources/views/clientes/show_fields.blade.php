<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $cliente->id !!}</p>
</div>

<!-- Dni Field -->
<div class="form-group">
    {!! Form::label('dni', 'Dni:') !!}
    <p>{!! $cliente->dni !!}</p>
</div>

<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{!! $cliente->nombre !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $cliente->created_at !!}</p>
</div>

<!-- Update At Field -->
<div class="form-group">
    {!! Form::label('update_at', 'Update At:') !!}
    <p>{!! $cliente->update_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $cliente->deleted_at !!}</p>
</div>

