@extends('layout')

@section('content')
    <div class="container">
    @include('nav')
    <div class="row">
        <div class="col-12">
            <h2>Editar Usuario</h2>
        </div>
    </div>
    <form method="POST" action="{{ route('update', $otheruser->id) }}">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-4 offset-2">
                <div class="form-group {{ $errors->has('nombre') ? 'has-danger' : '' }}">
                    <label>Nombre</label>
                    <input class="form-control" type="text" name="nombre" placeholder="Nombre" value="{{ $otheruser->nombre }}">
                    {!! $errors->first('nombre', '<span class="help-block">:message</span>') !!}
                </div>
                <div class="form-group {{ $errors->has('puesto') ? 'has-danger' : '' }}">
                    <label>Puesto</label>
                    <input class="form-control" type="text" name="puesto" placeholder="Puesto" value="{{ $otheruser->puesto }}">
                    {!! $errors->first('puesto', '<span class="help-block">:message</span>') !!}
                </div>
               
               
            </div>
            <div class="col-4">
                <div class="form-group {{ $errors->has('area') ? 'has-danger' : '' }}">
                    <label>Área</label>
                    <input class="form-control" type="text" name="area" placeholder="Area" value="{{ $otheruser->area }}">
                    {!! $errors->first('area', '<span class="help-block">:message</span>') !!}
                </div>
                <div class="form-group {{ $errors->has('abreviacion') ? 'has-danger' : '' }}">
                    <label>Abreviación</label>
                    <input class="form-control"  type="text" name="abreviacion" placeholder="Abreviacion" value="{{ $otheruser->abreviacion }}">
                    {!! $errors->first('abreviacion', '<span class="help-block">:message</span>') !!}
                </div>
            </div>
            <button type="submit" class="btn btn-block btn-outline-success">Guardar</button>
        </div>
</form>
</div>
@endsection