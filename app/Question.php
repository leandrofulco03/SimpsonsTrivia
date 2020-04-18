<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Answer;

class Question extends Model
{
  protected $table = 'questions';
//protected $primaryKey = 'id';
//protected $timestamps = false;
protected $guarded = [];

 public function answer() {
     return $this->hasMany(Answer::class, 'question_id');
 }
}
