<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{   
    protected $primaryKey = 'post_id';
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
