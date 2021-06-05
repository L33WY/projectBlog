<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    public function create(Post $post)
    {
        return view('comments/create', compact('post'));
    }

    public function store()
    {
        $data = request()->validate([
           'description' => 'required|max:100',
            'post_id' => ''
        ]);

        $data['user_id'] = (string)Auth::id();
//        $data['post_id'] = (int)$data['post_id'];

        Comment::create($data);

        return redirect('/post/'. $data['post_id']);
    }
}
