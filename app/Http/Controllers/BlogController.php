<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function add ()
    {
        $blogCategory = Category::orderBy('id', 'DESC')->get();
        return view('blog.add', [
            'blogCategories' => $blogCategory,
        ]);
    }

    public function store (Request $request)
    {
        Blog::saveBlogData($request);

        return redirect()->back()->with('message', 'added successfully');
    }

    public function update (Request $request, $id)
    {
        Blog::saveBlogData($request, $id);

        return redirect('/manage-blog')->with('message', 'updated successfully');
    }

    public function edit ($id)
    {
        $blogCategory = Category::orderBy('id', 'DESC')->get();
        return view('blog.edit', [
            'blogCategories' => $blogCategory,
            'blog' => Blog::find($id),
        ]);
    }

    public function manage ()
    {
        $blogs = Blog::all();
        return view('blog.manage', [
            'blogs' => $blogs,
        ]);
    }


    public function delete(Request $request, $id)
    {
        $blog = Blog::find($id);
        if (file_exists($blog->image))
        {
            unlink($blog->image);
        }
        $blog->delete();
        return back()->with('message', 'Blog deleted successfully');
    }
}
