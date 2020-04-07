<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Question;

class Answer extends Model
{
    //protected $table = 'answers';
    //protected $primaryKey = 'id';
   //protected $timestamps = false;
   protected $guarded = [];

   public function question() {
     return $this->belongsTo(Question::class, 'question_id');
   }
}
