@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h4 class=float-right>Bienvenido {{ auth()->user()->username }}</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('logout') }}">
                                {{ csrf_field() }}
                                <button class="btn btn-sm btn-outline-danger float-right">Cerrar sesión</button>
                        </form>
                    </div>
                </div>
                    <div class="container">
                        <div class="row">
                           
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection