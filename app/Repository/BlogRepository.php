<?php 
namespace App\Repository;

use App\Models\Blog;

interface BlogRepositoryInteface
{
    public function getAllBlogs();
    public function getDetailBlog($blogId);
    public function createBlog(array $data);
    public function updateBlog($blogId, array $data);
    public function deleteBlog($blogId);
    public function getReadBlog();
}

class BlogRepository implements BlogRepositoryInteface 
{
    public function getAllBlogs()
    {
        return Blog::all();
    }

    public function getDetailBlog($blogId)
    {
        return Blog::findOrFail($blogId);
    }

    public function createBlog(array $data)
    {
        return Blog::create($data);
    }

    public function updateBlog($blogId, array $data)
    {
        return Blog::whereId($blogId)->update($data);
    }

    public function deleteBlog($blogId)
    {
        return Blog::whereId($blogId)->delete();
    }

    public function getReadBlog()
    {
        return Blog::where('is_read', true);
    }
}