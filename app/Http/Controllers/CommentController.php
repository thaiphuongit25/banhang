<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\Comment;

class CommentController extends Controller
{
    public function store(Request $request)
    {   
        $request->validate([
            'content' => 'required',
            'commentable_id' => 'required',
            'commentable_type' => 'required',
            'captcha' => 'required|captcha'
        ]);

        $comment = new Comment;
        $comment->content = $request->content;
        $comment->status = 1;
        $comment->commentable_id = $request->commentable_id;
        $comment->commentable_type = $request->commentable_type;
        $comment->user_id = 1; // Auth::user()->id;
        $comment->save();

        return redirect()->back();
    }
}
