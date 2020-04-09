@extends('layouts.app')

@section('content')
<div class="container" style="background-color: white; padding-bottom: 100px;padding-top: 70px;margin-top: -50px;">
    <div class="row justify-content-center">
      <div class="col-md-8">
      <div class="card">
          <div class="card-header"><h1 style="font-family: 'Voltaire', sans-serif; font-size: 35px; margin-left: 15px;">Felicidades</div>

          <div class="card-body">
              @if (session('status'))
                  <div class="alert alert-success" role="alert">
                      {{ session('status') }}
                  </div>
              @endif

            <p style="font-family: 'Voltaire', sans-serif; font-size: 22px; margin-left: 18px;">Ya estas registrado!</p> <br>
            <p style="font-family: 'Voltaire', sans-serif; font-size: 22px; margin-left: 18px;">Para comenzar a jugar pulsa el boton <a href=" {{ url('/questions') }}" style="text-decoration: none;"><button type="button" class="btn btn-warning btn-lg"><ion-icon name="play"></ion-icon>PLAY</button></a></p>
          </div>
      </div>
  </div>
  </div>
  </div>
@endsection
