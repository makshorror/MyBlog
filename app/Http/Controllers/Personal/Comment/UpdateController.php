<?php

namespace App\Http\Controllers\Personal\Comment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Personal\Comments\StoreRequest;
use App\Models\Comment;

class UpdateController extends Controller
{
    public function __invoke(StoreRequest $request, Comment $comment)
    {

        $data = $request->validated();
        $comment->update($data);
        return redirect()->route('personal.comment.index');
    }
}
