<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Question;
use App\Score;

class QuestionController extends Controller
{
  public function index(Request $request)
{
$questions = Question::all();
  return view('question', compact('questions'));
}
 public function resultados(Request $request){
      $inputs = collect($request->all());
      $questionId = $inputs->pull('questions');
      $valor = 0;
      foreach ($inputs as $key=>$input) {
        if ($key != '_token' && $key != 'submit')
          if($input){
            $valor ++;
          }
      }
      $user = Auth::user();
      $score = Score::create([
        'user_id' => $user->id,
        'score' => $valor
      ]);

      $score = [];
      return view('/resultados',[
        'score' => $score->score
      ]);
 }
}
