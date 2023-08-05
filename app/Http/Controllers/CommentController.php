<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function addComment(Request $request){
        $userId = auth()->user()->getAuthIdentifier();
        $articleId = $request->articleId;
        $commentInput = $request->comment;
        $comment = new Comment();
        $comment->user_id = $userId;
        $comment->article_id = $articleId;
        $comment->comment = $commentInput;
        $comment->save();
        return redirect()->intended('/article/'.$articleId);
    }
}
