<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostsController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    public function create()
    {
        $categories = DB::select('SELECT * FROM category');
        $languages = DB::select('SELECT * FROM language');

        return view('posts/create', [
            'categories' => $categories,
            'languages' => $languages
        ]);
    }

    public function store()
    {
        $data = request()->validate([
           'title' => 'required',
           'description' => 'required',
            'image' => 'image',
            'category' => '',
            'language' => '',

        ]);


        if (request('image') !== null)
        {
        $imagePath = request('image')->store('uploads', 'public');

            auth()->user()->posts()->create([
                'title' => $data['title'],
                'description' => $data['description'],
                'category' => $data['category'],
                'language' => $data['language'],
                'image' => $imagePath,
            ]);
        } else {
            auth()->user()->posts()->create([
                'title' => $data['title'],
                'description' => $data['description'],
                'category' => $data['category'],
                'language' => $data['language'],
            ]);
        }

        return redirect('/profile/' . auth()->user()->id);

    }


    public function show(Post $post)
    {
        //Eloquent model comment not working here ;C
        $comments = DB::select('SELECT users.id, users.name, comments.description, DATE(comments.created_at) AS created_at FROM comments INNER JOIN users ON users.id=comments.user_id WHERE comments.post_id=?', [$post->id]);
        $postDate = $post->created_at->format('Y-m-d');
        return view('posts/show', compact('post', 'postDate', 'comments'));
    }

    public function destroy(Post $post)
    {
        $this->authorize('update', $post->user->profile);

        $post->delete();

        return redirect('/profile/' . auth()->user()->id);
    }

    public function getId()
    {
        return $this->id;
    }
}
