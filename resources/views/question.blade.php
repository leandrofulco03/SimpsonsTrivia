@extends('layouts.app')
@section('content')
    <div class="container" style="background-color: white; padding-bottom: 100px;padding-top: 70px;margin-top: -50px; margin-bottom: -170px;">
        <div class="row">
            <div class="col-md-12">
              <div align="center">
<<<<<<< HEAD
                <h1>Elige la respuesta correcta</h1><br><br>
                <form class="" action="/resultados" method="post">
                  @csrf
                  @foreach ($questions as $question)
                  <label style="font-family: 'Voltaire', sans-serif; font-size: 20px;">{{$question->body}}</label><br><br>
=======
                <h1>Elige la respuesta correcta</h1>
                <form class="" action="/resultados" method="post">
                  @csrf
                  @foreach ($questions as $question)
                  <p style="font-family: 'Voltaire', sans-serif; font-size: 20px;">{{$question->body}}</p>
>>>>>>> 50f56deed24c9fb098c33cdd5ecae1064f54667c
                  @foreach ($question->answer as $answer)
                    <div class="">
                      <input type="radio" name="{{$answer->question_id}}" value="{{$answer->id}}">
                      <span>{{$answer->answer}}</span>
<<<<<<< HEAD
                    </div><br><br>
                    @endforeach
                  @endforeach
                  <button type="submit" class="btn btn-warning" name="button">Enviar</button>
=======
                     </div>
                    @endforeach
                  @endforeach
                  <button type="submit" name="button">Enviar</button>
>>>>>>> 50f56deed24c9fb098c33cdd5ecae1064f54667c
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
