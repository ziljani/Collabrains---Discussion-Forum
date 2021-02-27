<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
 
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('Profile')->with('user', $user);
    }

    public function edit()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('EditProfile')->with('user', $user);
    }

    public function update(Request $request)
    {
        $this -> validate($request,[
            'title' => 'required',
            'body' => 'required' 
        ]);
        
        //Create Post
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        return redirect('/posts')->with('success','Post Updated');
    
    }


}
