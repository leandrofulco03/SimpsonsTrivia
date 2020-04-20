@extends('layouts.app')
@section('content')
  <div class="container" style="background-color: black; padding-bottom: 100px;padding-top: 70px;margin-top: -50px; margin-bottom: -170px;">
    <div align="center">
    <h1 style="font-size: 30px; color: white">TU PUNTAJE FUE {{$score}}</h1><br>

    @if ($score <= 7)
      <h2 style="color:#ffea00">Baboso</h2>
      <img src="/img/nelsongif.gif" alt="">
    @elseif ($score >=8 && $score < 11)
      <h2 style="color: #ffea00">Cabeza de alcornoque</h2>
      <img src="/img/rafagif.gif" alt="">
    @elseif ($score >=11 && $score < 15)
      <h2 style="color: #ffea00">De pelos </h2>
      <img src="/img/homerogif.gif" alt="">
    @elseif ($score = 15)
      <h2 style="color: #ffea00">Max Power</h2>
      <img src="/img/burnsgif.gif" alt="">
    @endif
    <br><br>
    <p style="font-size:20px;">Volver a la <a href="{{ url('/question')}}" style="color: #ffea00;">Trivia</a></p>

  </div>
  </div>




@endsection
