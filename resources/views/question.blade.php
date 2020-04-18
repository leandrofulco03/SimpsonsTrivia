@extends('layouts.app')
@section('content')
    <div class="container" style="background-color: white; padding-bottom: 100px;padding-top: 70px;margin-top: -50px; margin-bottom: -170px;">
        <div class="row">
            <div class="col-md-12">
              <div align="center">
                <h1>Elige la respuesta correcta</h1>
                <form class="" action="/resultados" method="post">
                  @csrf
                  @foreach ($questions as $question)
                  <p style="font-family: 'Voltaire', sans-serif; font-size: 20px;">{{$question->body}}</p>
                  @foreach ($question->answer as $answer)
                    <div class="">
                      <input type="radio" name="{{$answer->question_id}}" value="{{$answer->id}}">
                      <span>{{$answer->answer}}</span>
                     </div>
                    @endforeach
                  @endforeach
                  <button type="submit" name="button">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
