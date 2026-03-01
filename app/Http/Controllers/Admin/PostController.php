<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('user')->paginate(15);
        return view('admin.posts.index', compact('posts'));
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return back()->with('success', 'Post eliminado por el administrador.');
    }
}
