<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Categories;
use App\Profile;
use App\Skill;
use App\Personal;
use App\FunFacts;
use App\Portfolio;
use App\Portfolios;
use App\Users;
use App\Contact;
use App\Blog;

class IndexController extends Controller
{
    public function getIndex()
    {
        $categories = Categories::all();
        $profile = Profile::limit(10)->pluck('value_name', 'key_name')->toArray();
        $skill = Skill::pluck('value_name', 'key_name')->toArray();
        $personal = Personal::all();
        $funfacts = FunFacts::pluck('key', 'value')->toArray();
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

    public function postContact(Request $request)
    {
        $data = [
            'name' => $request->name,
            'information'=> $request->information,
            'content' => $request->content,
            'created_at' => now(),
        ];
        Contact::create($data);
        return redirect()->back()->with('alert_suscess', 'Cảm ơn bạn đã quan tâm dịch vụ, tôi sẽ liên hệ lại sau!');
    }

    public function getLogin()
    {
        if (!Auth::check()) {
            return view('auth.login');
        }
        return redirect('/');
    }

    public function postLogin(Request $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::attempt($data)) {
            return redirect('/');
        }
        return redirect()->back();
    }

    // public function postdangky(Request $request)
    // {
    //     $data = [
    //         'email' => $request->email,
    //         'password' => Hash::make($request->pass),
    //     ];
    //     Users::create($data);
    //     dd('ok');
    // }

   

    // public function getBlog()
    // {
    //     return view('blog');
    // }

    // public function postBlog(Request $request)
    // {
    //     $data = [
    //         'content' => $request->editor1,
    //     ];
    //     Blog::create($data);
    //     dd('ok');
    // }
}
