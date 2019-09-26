<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function showAnswer()
    {
        $answer = array(1, 2, 3);

        return View::make();
    }

}