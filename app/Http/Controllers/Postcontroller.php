<?php

namespace App\Http\Controllers;

use App\Post;
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

        return redirect('createquestion')->with('success', 'Your question has been posted with success!');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
