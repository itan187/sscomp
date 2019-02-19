@extends('layout')

@section('content')
@include('nav')
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                 @if (session()->has('info'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>{{ session('info') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <a href="{{ route('createCl') }}" class="btn btn-outline-primary float-left">Alta Cliente</a>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3 class="h3">Lista de Clientes</h3>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>
                                    <th>Nombre</th>
                                    <th>direccion</th>
                                    <th>telefono</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clients as $index => $client)
                                    <tr>
                                        <th scope="row">{{ $index +1}}</th>
                                        <td>{{ $client->nombre }}</td>
                                        <td>{{ $client->direccion }}</td>
                                        <td>{{ $client->telefono }}</td>

                                        <td>
                                            <a href="{{ route('editCl', $client->id) }}" class="btn btn-outline-info btn-sm btn-block">
                                                Editar
                                            </a>
                                           <form method="POST" action="{{ route('destroyCl', $client->id) }}">
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