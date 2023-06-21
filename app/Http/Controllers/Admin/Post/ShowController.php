<?php

namespace App\Http\Controllers\Admin\Post;

use App\Models\Category;
use App\Models\Post;

class ShowController extends BaseController
{
    public function __invoke(Post $post)
    {
        $data = $post->category_id;
        $category = Category::find($data);
        $category = $category['title'];
        return view('admin.posts.show', compact('post', 'category'));
    }
}
