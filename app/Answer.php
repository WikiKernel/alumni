<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = [
        'body'
    ];

    public function user()
    {
        $this->belongsTo('App\User');
    }

    public function post()
    {
        $this->belongsTo('App\Post');
    }
}
