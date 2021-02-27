<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Models\Reply;
use DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['show']]);
    }
    public function index()
    {
        // $posts = Post::all();
        // return Post::where('title','Post Two')->get();
        // $posts = DB::select('SELECT * FROM posts');
        // $posts = Post::orderBy('title','desc')->take(1)->get();
        // $posts = Post::orderBy('title','desc')->get();
        //$posts = Post::orderBy('created_at','desc')->paginate(10);
        $user = User::find(auth()->user()->id);
        return view('posts.index')->with('user', $user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cat = Category::orderBy('name','asc')->pluck('name', 'id');

        return view('posts.create')->with('cats',$cat);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this -> validate($request,[
            'category' => 'required',
            'body' => 'required' 
        ]);
        
        //Create Post
        $post = new Post;
        $post->category_id = $request->category;
        $post->body = $request->input('body');
        $post->user_id = auth()->user()->id;
        $post->save();

        return redirect('/posts')->with('success','Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $cat = Category::orderBy('name','asc')->pluck('name', 'id');
        if (auth()->user()->id !==$post->user_id)
        {
            return redirect('/posts')->with('error', 'Unauthorized Page');
        }
        return view('posts.edit')->with('post',$post)->with('cats', $cat);
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
        $this -> validate($request,[
            'category' => 'required',
            'body' => 'required' 
        ]);
        
        //Create Post
        $post = Post::find($id);
        $post->category_id = $request->category;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        return redirect('/posts')->with('success','Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        if (auth()->user()->id !==$post->user_id)
        {
            return redirect('/posts')->with('error', 'Unauthorized Page');
        }
        $post -> delete();
        return redirect('/posts')->with('success','Post Removed');
    }

    public function create_reply($id)
    {
        $post = Post::find($id);
        return view('posts.reply')->with('post_id', $post->id);
    }

    public function store_reply(Request $request)
    {
        $this -> validate($request,[
           'body' => 'required' 
        ]);
        
        //Create Post
        $reply = new Reply;
        $reply->reply_content = $request->input('body');
        $reply->user_id = auth()->user()->id;
        $reply->post_id = $request->input('post_id');
        $reply->save();

        return redirect('/posts')->with('success','Post Created');
    }
}
