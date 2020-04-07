@extends('layouts.default')
@section('Titulo', 'Registro')
@section('content')

<div class="container" style=" background-color: white; margin-top: -45px; padding-bottom: 70px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="container" style="background: rgba(0,0,0,.5);  width: 100%; margin: auto; padding: 5px 35px; margin-top: 70px; padding-bottom: 70px; border-radius: 10px; height: 500px;">
                <div class="card-header" style="color: yellow;">{{ __('Registro') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        {{csrf_field()}}

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right" style="color: white;" >{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                          <label for="username" class="col-md-4 col-form-label text-md-right" style="color: white;">{{ __('Nombre de Usuario') }}</label>
                          <div class="col-md-6">
                              <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                              @error('username')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                        </div>
                      </div>

                      <div class="form-group row">
                          <label for="telefono" class="col-md-4 col-form-label text-md-right" style="color: white;">{{ __('Telefono') }}</label>

                          <div class="col-md-6">
                              <input id="telefono" type="number" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{ old('telefono') }}" required autocomplete="telefono">

                              @error('telefono')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right" style="color: white;">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                    <!--    <div class="form-group row">
                            <label for="avatar" class="col-md-4 col-form-label text-md-right" style="color: white;">{ __('Foto de Perfil') }}</label>

                        <div class="col-md-6">
                            <input id="avatar" type="file" class="form-control error('avatar') is-invalid enderror" name="avatar" value="{ old('avatar') }}" required autocomplete="avatar">

                            error('avatar')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{ $message }}</strong>
                                </span>
                            enderror
                        </div>
                    </div> -->

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right" style="color: white;">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right" style="color: white;">{{ __('Repetir Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrarse') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@section('footer')

@endsection
@endsection
