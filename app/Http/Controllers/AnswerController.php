<?php

namespace App\Http\Controllers;

use\App\Answer;
use Illuminate\Http\Request;

class AnswerController extends Controller
{



    public function index()
    {
        return view('createanswer');
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
        
        return back();

    }

    public function show()
    {
        $answers = answer::all();
        //return view('mensajes.index', compact('mensajes'));
        return view('faq.uniqueQuestion', compact('answers'));
    }


    /* public function CorrectAnswer()
    {
     
        $correctanswer = new Answer();
        $correctanswer->correct_answer = set('correct_answer');
        $correctanswer->save();

        return view('faq.uniqueQuestion');
    } */

    public function edit($id)
    {
        //
    }

    public function update(Request $request)
    {
        //correctAnswer($request->correct_answer);
        return view('faq.editAnswer');
    }

    public function destroy($id)
    {
        //
    }

}