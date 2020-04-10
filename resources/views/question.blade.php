@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: white; padding-bottom: 100px;padding-top: 70px;margin-top: -50px;">
        <div class="row">
            <div class="col-md-12">
              <div align="center">
                @foreach (App\Question::all() as $question)
                    <p>{{$question->body}}</p>
                    <ul>
                    @foreach ($question->answer as $answer)

                      <li><button type="button" class="btn btn-warning">{{ $answer->answer }}</button></li>

                      @endforeach
                    </ul>
                      @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
