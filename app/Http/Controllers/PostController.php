<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostController extends Controller
{
    /*public function result(Request $request)
    {
        $title = $request->input('title');
        $slug = $request->input('slug');

        return view('post.result', ['title' => $title, 'slug' => $slug]);
    }*/

    public function form(Request $request)
    {
        if ($request->has('title') and $request->has('slug')) {
            dump($request->input('title'));
            dump($request->input('slug'));
        }

        return view('post.form');
    }
}
