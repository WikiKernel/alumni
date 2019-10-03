<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Answer;

class AnswerController extends Controller
{
    public function showAnswer()
    {
        $answer = array(1, 2, 3);

        return View::make();
    }

    public function createanswer(Request $request){
        $r_id=$request->all()["q_id"]; 
        
        // dd($r_id);

    }

    public function store(Request $request){
        $request->validate([
            'q_id' => 'required',
            'body' => 'required|max:10000',
        ]);
        $answer = new Answer([
            'q_id' => $request->get('q_id'),
            'body' => $request->get('body'),
            //'id' => Auth::id()
        ]);
        $answer->save();
        
        return redirect('uniquequestion')->with('success', 'Your question has been posted with success!');

    }

}