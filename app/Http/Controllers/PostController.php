<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }

        $data = [
            'title' => 'All Post' . $title,
            'active' => 'posts',
            // 'posts' => Post::all()
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString() //latest() : terbaru / id paing besar
        ];

        return view('posts', $data);
    }

    public function show(Post $post)
    {
        $data = [
            'title' => 'Single Post',
            'active' => 'posts',
            'post' => $post
        ];

        return view('post', $data);
    }
}
