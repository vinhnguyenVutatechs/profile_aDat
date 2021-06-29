<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Blog;


class BlogController extends Controller
{
    public function getBlog(Type $var = null)
    {
        $blogs = Blog::get();
        $data = [
            'blogs' => $blogs,
        ];
        return view('admin.blog', $data);
    }

    public function getDeleteBlog($id)
    {
        $blogs = Blog::findOrFail($id);
        $blogs->delete();
        return redirect()->back()->with('alert_suscess', 'Xóa bài viết thành công.');
    }

    public function postAddBlog(Request $request)
    {
        $data = [
            'name' => $request->name,
            'img' => $request->img,
            'view' => $request->view,
            'content' => $request->editor1,
            'id_users' => Auth::id(),
        ];
        Blog::create($data);
        return redirect()->back()->with('alert_suscess', 'Thêm bài viết thành công');
    }
}
