@extends('layout')

@section('content')
    <div class="container">
    @include('nav')
    <div class="row">
        <div class="col-12">
            <h2>Editar Cliente</h2>
        </div>
    </div>
    <form method="POST" action="{{ route('updateCl', $client->id) }}">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-4 offset-2">
                <div class="form-group {{ $errors->has('nombre') ? 'has-danger' : '' }}">
                    <label>Nombre</label>
                    <input class="form-control" type="text" name="nombre" placeholder="Nombre" value="{{ $client->nombre }}">
                    {!! $errors->first('nombre', '<span class="help-block">:message</span>') !!}
                </div>
                <div class="form-group {{ $errors->has('direccion') ? 'has-danger' : '' }}">
                    <label>direccion</label>
                    <input class="form-control" type="text" name="direccion" placeholder="direccion" value="{{ $client->direccion }}">
                    {!! $errors->first('direccion', '<span class="help-block">:message</span>') !!}
                </div>
            </div>
            <div class="col-4">
                <div class="form-group {{ $errors->has('telefono') ? 'has-danger' : '' }}">
                    <label>Área</label>
                    <input class="form-control" type="text" name="telefono" placeholder="telefono" value="{{ $client->telefono }}">
                    {!! $errors->first('telefono', '<span class="help-block">:message</span>') !!}
                </div>
            </div>
            <button type="submit" class="btn btn-block btn-outline-success">Guardar Cliente</button>
        </div>
</form>
</div>
@endsection