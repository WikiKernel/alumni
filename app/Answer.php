<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = ['body','q_id','correct_answer'];

    public function user()
    {
        $this->belongsTo('App\User');
    }

    public function post()
    {
        $this->belongsTo('App\Post');
    }

    public function correctAnswer(int $correctAnswer = null) :bool
 {
   if ($correctAnswer != 1){
     $this->validated = null;
     $this->save();
     return true;
   }
   $this->validated = 1;
   $this->save();
     return false;
 }


}
