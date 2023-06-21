<?php

namespace App\Http\Controllers\Personal\Main;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        $posts = auth()->user()->likedPosts;
        $comments = auth()->user()->comments;
        $postsCount = $posts->count();
        $commentsCount = $comments->count();
        return view('personal.main.index', compact('postsCount','commentsCount'));
    }
}
