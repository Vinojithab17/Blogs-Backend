<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return response()->json($blogs);
    }

    public function show($id)
    {
        $blog = Blog::find($id);

        if (!$blog) {
            return response()->json(['message' => 'Blog not found'], 404);
        }

        return response()->json($blog);
    }

    public function getUserBlogs($id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        $blogs = $user->blogs;
        return response()->json($blogs);
    }

    public function create()
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created blog in the database.
     */
    public function store(Request $request)
    {
        error_log('Hi there? this Url is working fine');


        // Create the blog
        $blog = Blog::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $request->image,
            'user_id' => $request->user_id,
        ]);

        // Return a JSON response
        return response()->json(['success' => 'Blog created successfully.', 'blog' => $blog], 201);
    }


        /**
     * Store a new resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function return(Request $request)
    {

        $blog = Blog::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $request->image,
            'user_id' => $request->user_id,
        ]);

        // $blog->save();

        error_log('Hi there? this Url is working fine');
        return Response()-> json($blog, 201);
    }
}

