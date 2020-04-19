<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class QuestionController extends Controller
{
  public function index()
{
$questions = Question::all();
  return view('question', compact('questions'));
}
 public function resultados(Request $resultados){
        
 }
}
