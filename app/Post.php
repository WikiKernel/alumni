<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{   
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'body'];



    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function Answers()
    {
        return $this->hasMany('App\Answer');
    }
}
