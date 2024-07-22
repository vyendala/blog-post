<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("home");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages/createEdit')
            ->with('stub', 'create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|unique:posts',
            'content' => 'required'
        ]);

        $post->create($request->all());
        return redirect()->route('posts')->with("alert", "Post created successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id, Post $post)
    {
        $retrieved = $post->where("id", $id)->first();
        return view('pages/post')
            ->with('post', $retrieved);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Post $post)
    {
        // ddd($id);
        // $retrieved = $post->find($id);
        // $retrieved = $post->where("id", $id)->get();
        $retrieved = $post->where("id", $id)->first();
        return view('pages/createEdit')
            ->with('post', $retrieved)
            ->with('stub', 'update');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request, Post $post)
    {
        $post->find($id)->update($request->all());
        return redirect()->route('posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Post $post)
    {
        $post->find($id)->delete();
        return redirect()->route('posts');
    }

    public function posts(Post $post){
        $posts = $post->get();
        return view("pages/posts")
            ->with("posts", $posts);
    }
}
