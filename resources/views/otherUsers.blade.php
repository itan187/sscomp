@extends('layout')
@section('content')
    <div class="container">
        @include('nav')
        <div class="row">
            <div class="col-12">
                @if (session()->has('info'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>{{ session('info') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
            </div>
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
                                @foreach ($users as $index => $user)
                                    <tr>
                                        <th scope="row">{{ $index +1}}</th>
                                        <td>{{ $user->nombre }}</td>
                                        <td>{{ $user->puesto }}</td>
                                        <td>{{ $user->area }}</td>
                                        <td>{{ $user->abreviacion }}</td>
                                        <td>
                                            <a href="{{ route('edit', $user->id) }}" class="btn btn-outline-info btn-sm btn-block">
                                                Editar
                                            </a>
                                           <form method="POST" action="{{ route('destroy', $user->id) }}">
                                            @csrf
                                                <td>
                                                    <button class="btn btn-outline-danger btn-sm btn-block">
                                                        Eliminar
                                                    </button>
                                                </td>
                                            </form>
                                        </td>
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