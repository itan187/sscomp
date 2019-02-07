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
                <div class="form-group">
                    <label>Nombre</label>
                    <input class="form-control" type="text" name="nombre" placeholder="Nombre">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input class="form-control" type="password" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <label>Puesto</label>
                    <input class="form-control" type="text" name="puesto" placeholder="Puesto">
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label>Área</label>
                    <input class="form-control" type="text" name="area" placeholder="Area">
                </div>
                <div class="form-group">
                    <label>Abreviación</label>
                    <input class="form-control"  type="text" name="abreviacion" placeholder="Abreviacion">
                </div>
            </div>
            <button type="submit" class="btn btn-block btn-outline-success">Guardar</button>
        </div>
</form>
</div>
@endsection