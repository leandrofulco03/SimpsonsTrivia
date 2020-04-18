@extends('layouts.app')
@section('content')
    <div class="container" style="background-color: white; padding-bottom: 100px;padding-top: 70px;margin-top: -50px; margin-bottom: -170px;">
        <div class="row">
            <div class="col-md-12">
              <div align="center">
                <form class="" action="/resultados" method="post">
                  @csrf
                    @foreach (App\Question::all() as $question)
                    <p style="font-family: 'Voltaire', sans-serif; font-size: 20px;">{{$question->body}}</p>
                    @foreach ($question->answer as $answer)
                      <p>
                        <input type="radio" name="" value="">{{ $answer->answer }}
                      </p>
                      @endforeach
                      @endforeach
                      <input type="submit" name="" value="">Enviar
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
