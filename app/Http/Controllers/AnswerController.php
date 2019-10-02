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

    public function createanswer(Request $request){
        $r_id=$request->all()["q_id"]; 
        
        dd($r_id);

    }

}