<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Carbon\Carbon;

class ShowController extends Controller
{
    public function __invoke(Post $post)
    {
        $date = Carbon::parse($post->created_at);
        $text = '';
        switch ($post->comments->count()) {
            case 0;
            default:
                $text = ' комментариев';
                break;
            case 1:
                $text = ' комментарий';
                break;
            case 2;
            case 3;
            case 4:
                $text = ' комментария';
                break;
        }
        $relatedPosts = Post::where('category_id', $post->category_id)
            ->where('id', '!=', $post->id)
            ->get()
            ->take(3);
        return view('post.show', compact('post', 'date', 'text', 'relatedPosts'));
    }
}
