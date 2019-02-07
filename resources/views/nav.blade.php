<div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h2>Menú</h2> <h4 class=float-right>Bienvenido {{ auth()->user()->username }}</h4>
                    </div>
                    <div class="card-body show-grid">
                        <div class="row">
                            <div class="col">
                            <img src="{{ asset('img/carpeta.png') }}"> <label>Gestion de Clientes</label>
                        </div>
                        <div class="col">
                            <a href="{{ route('projects') }}"><img src="{{ asset('img/archivo.png') }}"><label>Gestion de Proyectos</label></a>
                        </div>
                        <div class="col">
                            <a href="{{ route('users') }}"><img src="{{ asset('img/usuario.png') }}"><label>Gestion de usuarios</label></a>
                        </div>
                        <div class="col">
                            <form method="POST" action="{{ route('logout') }}">
                                    {{ csrf_field() }}
                                    <button class="btn btn-sm btn-outline-danger float-right">Cerrar sesión</button>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>