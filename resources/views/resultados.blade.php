@extends('layouts.app')
@section('content')
  <div class="container" style="background-color: white; padding-bottom: 100px;padding-top: 70px;margin-top: -50px; margin-bottom: -170px;">
    <div align="center">
    <h1 style="font-size: 30px;">TU PUNTAJE FUE {{$score}}</h1><br>

    @if ($score <= 7)
      <img src="/img/nelsongif.gif" alt="">
    @elseif ($score >=8 && $score < 11)
      <img src="/img/rafagif.gif" alt="">
    @elseif ($score >=11 && $score < 15)
      <img src="/img/homerogif.gif" alt="">
    @elseif ($score = 15)
      <img src="/img/burnsgif.gif" alt="">
    @endif
    <br><br>
    <p style="font-size:20px;">Volver a la <a href="{{ url('/question')}}" style="color: yellow;">Trivia</a></p>

  </div>
  </div>




@endsection
