@extends('layout')

@section('content')
    <div class="container">
    @include('nav')
    <div class="row">
        <div class="col-12">
            <h2>Crear Usuario</h2>
        </div>
    </div>
    <form method="POST" action="{{ route('create') }}">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-4 offset-md-2">
                <div class="form-group {{ $errors->has('nombre') ? 'has-danger' : '' }}">
                    <label>Nombre</label>
                    <input class="form-control" type="text" name="nombre" placeholder="Nombre">
                    {!! $errors->first('nombre', '<span class="help-block">:message</span>') !!}
                </div>
                <div class="form-group {{ $errors->has('password') ? 'has-danger' : '' }}">
                    <label>Password</label>
                    <input class="form-control" type="password" name="password" placeholder="Password">
                    {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
                </div>
                <div class="form-group {{ $errors->has('puesto') ? 'has-danger' : '' }}">
                    <label>Puesto</label>
                    <input class="form-control" type="text" name="puesto" placeholder="Puesto">
                    {!! $errors->first('puesto', '<span class="help-block">:message</span>') !!}
                </div>
            </div>
            <div class="col-4">
                <div class="form-group {{ $errors->has('area') ? 'has-danger' : '' }}">
                    <label>Área</label>
                    <input class="form-control" type="text" name="area" placeholder="Area">
                    {!! $errors->first('area', '<span class="help-block">:message</span>') !!}
                </div>
                <div class="form-group {{ $errors->has('abreviacion') ? 'has-danger' : '' }}">
                    <label>Abreviación</label>
                    <input class="form-control"  type="text" name="abreviacion" placeholder="Abreviacion">
                    {!! $errors->first('abreviacion', '<span class="help-block">:message</span>') !!}
                </div>
            </div>
            <button type="submit" class="btn btn-block btn-outline-success">Guardar</button>
        </div>
</form>
</div>
@endsection