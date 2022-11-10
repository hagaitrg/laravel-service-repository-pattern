<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Repository\BlogRepository;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    private $blog;
    public function __construct(BlogRepository $blog)
    {
        $this->blog = $blog;
    } 

    public function index()
    {
        return response()->json([
            "success" => true,
            "code" => 200,
            "message" => "Berhasil get data blog!",
            "data" => $this->blog->getAllBlogs()
        ], 200);
    }

    public function store(Request $request)
    {
        $blogData = $request->all();

        return response()->json([
            "success" => true,
            "code" => 201,
            "message" => "Berhasil membuat blog baru!",
            "data" => $this->blog->createBlog($blogData)
        ], 201);
    }

    public function show($blogId)
    {
        return response()->json([
            "success" => true,
            "code" => 200,
            "message" => "Berhasil mendapatkan detail blog!",
            "data" => $this->blog->getDetailBlog($blogId)
        ], 200);
    }

    public function update(Request $request, $blogId)
    {
        $blogData = $request->all();

        return response()->json([
            "success" => true,
            "code" => 200,
            "message" => "Berhasil update data blog!",
            "data" => $this->blog->updateBlog($blogId, $blogData)
        ], 200);
    }

    public function destroy($blogId)
    {
        return response()->json([
            "success" => true,
            "code" => 200,
            "message" => "Berhasil delete data blog!",
            "data" => $this->blog->deleteBlog($blogId)
        ], 200);
        
    }

    public function getAllReadBlog()
    {
        return response()->json([
            "success" => true,
            "code" => 200,
            "message" => "Berhasil get data blog yang sudah dibaca!",
            "data" => $this->blog->allReadBlog()
        ], 200);
    }

    public function changeStatus($blogId)
    {
        return response()->json([
            "success" => true,
            "code" => 200,
            "message" => "Berhasil membaca blog!",
            "data" => $this->blog->readBlog($blogId)
        ], 200);
    }
}
