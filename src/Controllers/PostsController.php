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
        $post_statuses = ['publish','pending','draft','private'];
        return view('mie-posts::admin.create',compact('post_statuses'));
    }
}
