<?php

namespace App\Http\Controllers;

use Illuminate\Http\File;
use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('home');
    }

    public function save(Request $request)
    {

        $file = $request->file('file');
        $files = $file->move(public_path(),'flan.jpg');
        dd($files);
        if ($files)
        {

        }
        /*if(Request::file('image')){
            $filename = time() . '.' . Request::file('image')->getClientOriginalExtension();
            Request::file('image')->move(public_path('images/'), $filename);
            $input["image"] = $filename;
        }*/

        /*$post = new Post();
        $post->create($input);

        return redirect("/main");*/
    }
}
