<?php

namespace App\Http\Controllers\Personal\Main;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        $posts = auth()->user()->likedPosts;
        $postsCount = $posts->count();
        return view('personal.main.index', compact('postsCount'));
    }
}
