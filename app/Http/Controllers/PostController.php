<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        $subTitle = '';

        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $subTitle = 'in ' . $category->name;
        }

        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $subTitle = 'by ' . $author->name;
        }

        return view('post', [
            "title" => "Blog",
            "subTitle" => $subTitle,
            "active" => 'blog',
            //TODO -> Eager Loading == "posts" => Post::with(['author', 'category'])->latest()->get(),

            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(10)->withQueryString(),
            //TODO Kalau mau bikin versi all Post ==> "posts" => Post::all()

            "judul" => ''
        ]);
    }

    public function show(Post $post)
    {
        return view('singlePost', [
            "title" => "Single Post",
            "active" => 'blog',
            "post" => $post
        ]);
    }
}
