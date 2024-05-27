<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;


class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }
    public function create()
    {
        $category = Category::all();
        return view('posts.create', compact('category'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'summary' => 'required',
            'image' => 'nullable|image|max:2048'
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }

        Post::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'summary' => $request->summary,
            'post_contents' => $request->post_contents,
            'category_id' => $request->category,
            'image' => $imagePath
        ]);

        return redirect()->route('index')->with('success', 'Post created successfully.');
    }
}
