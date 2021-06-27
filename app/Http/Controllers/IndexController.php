<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;
use App\Profile;
use App\Skill;
use App\Personal;
use App\funfacts;
use App\Portfolio;
use App\Portfolios;
use App\Users;
use App\Blog;

class IndexController extends Controller
{
    public function getIndex()
    {
        $categories = Categories::all();
        $profile = Profile::limit(10)->pluck('value_name', 'key_name')->toArray();
        $skill = Skill::pluck('value_name', 'key_name')->toArray();
        $personal = Personal::all();
        $funfacts = funfacts::pluck('key', 'value')->toArray();
        $categories_portfolio = Portfolio::all();
        $portdolio = Portfolios::with('CategoriesPortfolio')->get();
        $blogs = Blog::with('Users')->orderBy('updated_at', 'DESC')->paginate(6);
        $data = [
            'blogs' => $blogs,
            'portdolio' => $portdolio,
            'categories_portfolio' => $categories_portfolio,
            'funfacts' => $funfacts,
            'personal' => $personal,
            'skill' => $skill,
            'profile' => $profile,
            'categories' => $categories,
        ];
        return view('index', $data);
    }




    public function getBlog()
    {
        return view('blog');
    }

    public function postBlog(Request $request)
    {
        $data = [
            'content' => $request->editor1,
        ];
        Blog::create($data);
        dd('ok');
    }
}
