<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
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

        // menangkap apa yg diketikkan di field searching
        // dd(request('search'));

        return view('posts', [
            "judul" => "All Posts" . $title,
            "active" => 'posts',
            // "posts" => Post::all()
            "posts" => Post::latest()->Filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "judul" => "Single Post",
            "active" => 'posts',
            "post" => $post
        ]);
    }
}
