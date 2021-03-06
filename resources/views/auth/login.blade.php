@extends('layouts.default')
@section('Titulo', 'Inicio de sesión')
@section('content')
<div class="container" style="background-color: white; margin-top: -45px; padding-bottom: 50px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class=""  style="background: rgba(0,0,0,.5);  width: 100%; margin: auto; padding: 5px 35px; margin-top: 70px; margin-bottom: 70px; padding-bottom:50px; border-radius: 10px; height: 280px;">
                <div class="card-header" style="color: yellow; font-family: 'Voltaire', sans-serif; font-size:20px;">{{ __('Iniciar Sesion') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" onsubmit="return validarSesion();">
                        @csrf
                         {{--Se usa para que no sean vulnerables los datos--}}
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right" style="color: white;">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" {{--required autocomplete="email" autofocus--}}>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right" style="color: white;">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" {{--required autocomplete="current-password"--}}>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Recordarme') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Entrar') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a style="color: yellow;" class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Olvidaste tu contraseña?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
