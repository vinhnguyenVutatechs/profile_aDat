<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class SiteMapController extends Controller
{
    public function index() {
        $blogs= Blog::latest()->get();

        return response()->view('sitemap.index', [
            'blogs' => $blogs,
        ])->header('Content-Type', 'text/xml');
    }
}
