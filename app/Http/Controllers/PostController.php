<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view('dashboard');
    }

    public function create()
    {
        return view('posts.create');
        // return redirect()->route('posts.create');
    }
}
