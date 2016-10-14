<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Log; // required for the log class

class PostsController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
       
        $posts = Post::paginate(4);
        return view('posts.index')->with(array('posts' => $posts));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('posts.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       $rules = array(
            'title' => 'required|max:100',
            'url' => 'required',
            'content' => 'required'
        );

        $request->session()->flash('ERROR_MESSAGE', 'Post was not saved. Please see messages under inputs');
        $this->validate($request, $rules);
        $request->session()->forget('ERROR_MESSAGE');
       // validation successful, go ahead and create/save post.

        $post = new Post;
        $post->created_by = $request->user()->id;
        $post->title = $request->title;
        $post->url = $request->url;
        $post->content = $request->content;
        $post->save();

        $request->session()->flash('SUCCESS_MESSAGE', 'Post was saved successfully');
        Log::info('post was created.'. $post);
        return redirect()->action('PostsController@show', $post->id);
          
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        $data = ['post' => $post];
        //
        return view('posts.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $data = ['post' => $post];

        //find the post with the id
        return view('posts.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        $rules = array(
            'title' => 'required|max:100',
            'url' => 'required',
            'content' => 'required'
        );

        $request->session()->flash('ERROR_MESSAGE', 'Post was not saved. Please see messages under inputs');
        $this->validate($request, $rules);
        $request->session()->forget('ERROR_MESSAGE');
       // validation successful, go ahead and create/save post.

        $post = Post::findOrFail($id);
        $post->created_by = 1;
        $post->title = $request->title;
        $post->url = $request->url;
        $post->content = $request->content;
        $post->save();

        $request->session()->flash('SUCCESS_MESSAGE', 'Post was saved successfully');

        return redirect()->action('PostsController@show', $post->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect('/posts');
        //
    }
}
