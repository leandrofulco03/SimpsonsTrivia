<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;

class Score extends Model
{
  public function user(){
      return $this->belongsTo(User::class);
  }
}
