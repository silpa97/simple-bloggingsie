<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'slug' => 'required|string|unique:categories,slug|max:255',
            'is_published' => 'boolean',
            'published_on' => 'nullable|date',
        ]);

        Category::create($request->all());

        return redirect()->route('categories.index')->with('success', 'Category created successfully.');
    }

    public function show(Request $request)
    {
        $cid = $request->input('id');
        $category = Category::findOrFail($cid);
        return view('categories.show', compact('category'));
    }

    public function edit(Request $request)
    {
        $cid = $request->input('id');
        $category = Category::findOrFail($cid);
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'slug' => 'required|string|unique:categories,slug,' . $category->id . '|max:255',
            'is_published' => 'boolean',
            'published_on' => 'nullable|date',
        ]);

        $category->update($request->all());

        return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
    }
}
