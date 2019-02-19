@extends('layout')

@push('fontello')
    <link rel="stylesheet" href="css/fontello-embedded.css">
@endpush

@section('content')
    @include('nav')
    <div class="container">
        <div class="row mt-4">
            <div class="col text-center">
                <h2>Gestión de Proyectos</h2>
            </div>
        </div>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item flex-fill text-center">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                     <i class="icon-folder-open">Cotizacion</i>
                </a>
            </li>
            <li class="nav-item flex-fill text-center">
                <a class="nav-link " id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
                    <i class="icon-pencil">Pedimento</i>
                </a>
            </li>
            <li class="nav-item flex-fill text-center">
                <a class="nav-link " id="messages-tab" data-toggle="tab" href="#messages" role="tab" aria-controls="messages" aria-selected="false">
                    <i class="icon-picture">Orden de Compra</i>
                </a>
            </li>
            <li class="nav-item flex-fill text-center">
                <a class="nav-link " id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="false">
                    <i class="icon-download"></i>
                </a>
            </li>
        </ul>
        @if (session()->has('info'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>{{ session('info') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <!-- Tab panes -->
        <div class="tab-content">
            @include('projects.step1')
            @include('projects.step2')
            @include('projects.step3')
            @include('projects.step4')
        </div>
        {{-- Footer --}}
        @include('projects.footer')
    </div>
@endsection