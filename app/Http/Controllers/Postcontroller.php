<?php

namespace App\Http\Controllers;

use App\Post;
use App\Answer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{

    public function index()
    {
        return view('createquestion');
    }


    public function create()
    {
        return view('createquestion');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required|max:10000',
        ]);
        $post = new Post([
            'title' => $request->get('title'),
            'body' => $request->get('body'),
            //'id' => Auth::id()
        ]);
        $post->save();

        return redirect('readquestion')->with('success', 'Your question has been posted with success!');
    }


    public function show()
    {
        $questions = post::all();
        //return view('mensajes.index', compact('mensajes'));
        return view('faq.readQuestion', compact('questions'));
    }

    public function showUniqueQuestion($id)
    {   
        $question = Post::find($id);
        $answers = Answer::all();
        return view('faq.uniqueQuestion', compact('question'), compact('answers'));
    }

    public function resolveQuestion($resolved)
    {
        
    }
    
    public function edit($id)
    {
        return view("faq.editQuestion");
    }

    public function update()
    {
        
    }

    public function destroy($id)
    {
        //
    }
}
