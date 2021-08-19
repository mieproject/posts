<?php

namespace MieProject\Posts\Controllers\Admin;

use MieProject\ProjectInitialization\Controllers\Controller;

class PostsController extends Controller
{
    public function index()
    {
        return view('');
    }

    public function create()
    {
        $post_statuses = ['publish','pending','draft','private'];
        return view('mie-posts::admin.create',compact('post_statuses'));
    }
}
