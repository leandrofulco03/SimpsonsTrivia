<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
  public function index()
{
    return view('/question');
}
 public function resultados(Request $resultados){
    $resultados = compact('resultados');
   return view('/resultados', $resultados);
 }
}
