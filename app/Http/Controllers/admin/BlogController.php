<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Blog;
use App\Models\admin\CategoryBlog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $categoryblogs = CategoryBlog::all();
        $blogs = Blog::with('category')->get();
        return view('backend.blog.index', compact('categoryblogs', 'blogs'));
    }

    public function create()
    {
        $categoryblog = CategoryBlog::all();
        return view('backend.blog.create', compact('categoryblog'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'overview' => 'required|string',
            'description' => 'required|string',
            'keywords' => 'required|string',
            'descriptions' => 'required|string',
            'category_id' => 'required|exists:category_blogs,id',
            'path' => 'required|image|mimes:jpg,jpeg,png,webp,svg|max:8192',
        ]);

        $imageName = null;

        if ($request->hasFile('path')) {
            $file = $request->file('path');
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(('uploads/blogs'), $imageName);
        }

        Blog::create([
            'title' => $request->title,
            'overview' => $request->overview,
            'description' => $request->description,
            'keywords' => $request->keywords,
            'descriptions' => $request->descriptions,
            'category_id' => $request->category_id,
            'path' => $imageName ? 'uploads/blogs/' . $imageName : null,
        ]);

        return redirect()->route('blogs.index')->with('success', 'Blog added successfully.');
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        $categoryblogs = CategoryBlog::all();
        return view('backend.blog.edit', compact('categoryblogs', 'blog'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'overview' => 'required|string',
            'description' => 'required|string',
            'keywords' => 'required|string',
            'descriptions' => 'required|string',
            'category_id' => 'required|exists:category_blogs,id',
            'path' => 'nullable|image|mimes:jpg,jpeg,png,webp,svg',
        ]);

        $blog = Blog::findOrFail($id);

        if ($request->hasFile('path')) {
            if ($blog->path && file_exists(($blog->path))) {
                unlink(($blog->path));
            }

            $image = $request->file('path');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(('uploads/blogs'), $imageName);

            $blog->path = 'uploads/blogs/' . $imageName;
        }

        $blog->update([
            'title' => $request->title,
            'overview' => $request->overview,
            'description' => $request->description,
            'keywords' => $request->keywords,
            'descriptions' => $request->descriptions,
            'category_id' => $request->category_id,
            'path' => $blog->path,
        ]);

        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully.');
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);

        if ($blog->path) {
            $imagePath = ($blog->path);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $blog->delete();

        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully.');
    }
}
