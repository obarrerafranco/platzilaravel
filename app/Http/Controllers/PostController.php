<?php

namespace PlatziPHP\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use PlatziPHP\Post;

use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('post',['post' => $post] );
    }

    public  function create()
    {
            return view('posts.create');
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(),[

            'title' => 'required',
            'body' => 'required',
        ]);

        if ($validator->fails()){
            return redirect()->route('post_create_path')
                ->withErrors($validator);
        }

        $post = new Post;

        $post->title = $request->get('title');

        $post->body = $request->get('body');

        $post->author_id = Auth::id();

        $post->save();


        return redirect()->route('post_show_path', $post->id);
    }

    public function edit($id){

        $post = Post::findOrFail($id);

        return view('posts.edit', ['post' => $post]);

    }

    public function update(Request $request, $id){

        $post = Post::findOrFail($id);

        $post->title = $request->get('title');

        $post->body = $request->get('body');

        $post->author_id = Auth::id();

        $post->save();

        return redirect()->route('post_show_path', $post->id);

    }

    public function destroy($id){

        $post=Post::find($id);
        $post->delete();
        return redirect()->route('home_path');

    }
}
