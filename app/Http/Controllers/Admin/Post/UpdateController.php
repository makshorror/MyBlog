<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\Category;
use App\Models\Post;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Post $post)
    {
        $data = $request->validated();
        $category = Category::find($data['category_id']);
        $category = $category['title'];
        $post = $this->service->update($data, $post);

        return view('admin.posts.show', compact('post', 'category'));
    }
}
