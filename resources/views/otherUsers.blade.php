@extends('layout')
@section('content')
    <div class="container">
        @include('nav')
        <div class="row">
            <div class="col-12 mt-5">
                <a href="{{ route('create') }}" class="btn btn-outline-primary float-left">Crear Usuario</a>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3 class="h3">Lista de Usuarios</h3>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Puesto</th>
                                    <th>Área</th>
                                    <th>Abreviación</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>{{ $user->nombre }}</td>
                                        <td>{{ $user->puesto }}</td>
                                        <td>{{ $user->area }}</td>
                                        <td>{{ $user->abreviacion }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>     
    </div>
@endsection