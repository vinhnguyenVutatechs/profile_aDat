<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Index()
    {
        return view('admin.index');
    }

    public function getLogout()
    {
        if (Auth::check()) {
            Auth::logout();
            return redirect()->route('Index');
        }
        return redirect()->route('Index');
        
    }
}
