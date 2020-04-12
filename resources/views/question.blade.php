@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: white; padding-bottom: 100px;padding-top: 70px;margin-top: -50px; margin-bottom: -170px;">
        <div class="row">
            <div class="col-md-12">
              <div align="center">
                @foreach (App\Question::all() as $question)
                    <p style="font-family: 'Voltaire', sans-serif; font-size: 20px;">{{$question->body}}</p>
                    <ul>
                    @foreach ($question->answer as $answer)

                      <li style="margin-bottom: 70px; text-decoration: none; font-family: 'Voltaire', sans-serif;"><button type="button" class="btn btn-warning">{{ $answer->answer }}</button></li>

                      @endforeach
                    </ul>
                      @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
