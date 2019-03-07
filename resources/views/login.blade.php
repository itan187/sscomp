
@extends('layout')

@section('content')
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
            
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="{{ asset('img/logo.png') }}" alt="IMG">
                </div>
                
                <form action="{{ route('login') }}" method="post" id ="form" class="login100-form">
                    @if (session()->has('info'))
                        <div class="alert alert-info">
                            {{ session('info') }}
                        </div>
                    @endif
                    {{ csrf_field() }}
                    <span class="login100-form-title"><strong>SSCOMP</strong></span>
                    <div class="wrap-input100">
                        <input class="input100" type="text" name="username"  placeholder="Usuario" value="{{ old('username') }}">
                        {!! $errors->first('username', '<span class="help-block">:message</span>') !!}
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                    </div>

                    <div class="wrap-input100 {{ $errors->has('abreviacion') ? 'has-danger' : '' }}">
                        <input class="input100" type="password" id="password"  placeholder="Password" name="password">
                        {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="container-login100-form-btn">
                    <input class="login100-form-btn" type="submit" name="login" value="login">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection