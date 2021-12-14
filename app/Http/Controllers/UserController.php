<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //TODO Tampilkan semua Cateogories
        return view('user', [
            "title" => 'Post Categories',
            "active" => 'blog',
            "categories" => User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(User $author)
    {
        //TODO Showing all Specific Category

        return view('post', [
            "title" => 'Blog',
            "active" => 'blog',
            "posts" => $author->posts->load('category', 'author'),
        ]);
    }

    public function showAuthorPost(User $author)
    {
        //TODO Showing all Specific Category

        return view('post', [
            "title" => 'Blog',
            "active" => 'blog',
            "posts" => $author->posts->load('category', 'author'),
            "judul" => '<h1>Posted by : <br><span class="text-primary mt-2">' . $author->name . '</span></h1>'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
