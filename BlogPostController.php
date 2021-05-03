<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = BlogPost::all();
        return view(
            'blog.index',
            ['posts' => $posts]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newPost = BlogPost::query()
            ->create(
                [
                    'title' => $request->title,
                    'body' => $request->body,
                    'user_id' => rand(1, 10)
                ]
            );
        return redirect("blog/{$newPost -> id}/detail");
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\BlogPost $blogPost
     * @return \Illuminate\Http\Response
     */
    public function show(BlogPost $blogPost)
    {
        $categories = $blogPost
            ->categories()
            -> distinct()
            ->get();
        $user = $blogPost -> user() -> first();
        return view('blog.detail', [
            'post' => $blogPost,
            'categories' => $categories,
            'user' => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\BlogPost $blogPost
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogPost $blogPost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\BlogPost $blogPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BlogPost $blogPost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\BlogPost $blogPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogPost $blogPost)
    {
        //
    }

    public function postsByCategory(Category $category)
    {
        $posts = $category->posts()
            ->distinct()
            ->get();
        return view(
            'blog.index',
            ['posts' => $posts]
        );
    }
    public function postsByUser(User $user)
    {
        $posts = $user -> posts()
            -> distinct() -> get();
        return view(
            'blog.index',
            ['posts' => $posts]
        );
    }

}
