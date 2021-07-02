<?php

namespace MieProject\Posts\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function dash_index()
    {
        return view('');
    }

    public function dash_create()
    {
        return view('mie-posts::admin.create');
    }
}
