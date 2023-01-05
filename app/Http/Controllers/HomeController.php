<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Slider;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home ()
    {
        $category = Category::where('name', 'Sharee')->count();
        return view('front.home.blog', [
            'blogs' => Blog::latest()->take(4)->get(),
            'blogs' => Blog::paginate(3),
            'sliders' => Slider::latest()->take(4)->get(),
            'categories' => Category::latest()->take(3)->get(),
            'cate' => $category,
            'tags' => Tag::all(),
        ]);
    }


    public function details($id)
    {
        return view('front.home.blog-details', [
            'blog' => Blog::find($id),
            'category'=> Category::find($id),
            'categories'=> Category::all(),
            'tags' => Tag::latest()->take(3)->get(),
            'sliders' => Slider::orderBy('id', 'DESC')->get(),
        ]);
    }


    public function addReply (Request $request)
    {
        if (Auth::id())
        {
            Reply::addReply($request);
            return redirect()->back()->with('message','Comment reply successfully');
        }
        else {
            return redirect('/login');
        }
    }

    public function comment (Request $request)
    {
        if (Auth::id())
        {
            $user = Auth::user()->id;
            $userID = $user;
            Comment::addComment($request, $userID);
            return redirect()->back()->with('message', 'Comments send successfully');
        }
        else {
            return redirect('/login');
        }
    }
}
