<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Following;
use DB;

class FollowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function store(Request $request)
    {
        
        //Create Post
        $following = new Following;
        $following->category_id = $request->input('cat_id');
        $following->user_id = auth()->user()->id;
        $following->save();

        return redirect()->back()->with('success','Followed Successfully');
    }

}