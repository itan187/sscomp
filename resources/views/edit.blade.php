@extends('layout')

@include('nav')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>Editar Usuario</h2>
        </div>
    </div>
    <form method="POST" action="{{ route('update', $otheruser->id) }}">
        @csrf
        <div class="row">
            <div class="col-4 offset-md-2">
                <div class="form-group">
                    <label>Nombre</label>
                    <input class="form-control" type="text" name="nombre" placeholder="Nombre" value="{{ $otheruser->nombre }}">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input class="form-control" type="password" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <label>Puesto</label>
                    <input class="form-control" type="text" name="puesto" placeholder="Puesto" value="{{ $otheruser->puesto }}">
                </div>
               
               
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label>Área</label>
                    <input class="form-control" type="text" name="area" placeholder="Area" value="{{ $otheruser->area }}">
                </div>
                <div class="form-group">
                    <label>Abreviación</label>
                    <input class="form-control"  type="text" name="abreviacion" placeholder="Abreviacion" value="{{ $otheruser->abreviacion }}">
                </div>
            </div>
            <button type="submit" class="btn btn-block btn-outline-success">Guardar</button>
        </div>
</form>
</div>