<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

use App\Question;

class QuestionController extends Controller
{
  public function index()
{
$questions = Question::all();
  return view('question', compact('questions'));
}
 public function resultados(Request $resultados){
<<<<<<< HEAD
      var_dump($resultados);
=======
      var_dump($resultados);;
>>>>>>> 50f56deed24c9fb098c33cdd5ecae1064f54667c
 }
}
