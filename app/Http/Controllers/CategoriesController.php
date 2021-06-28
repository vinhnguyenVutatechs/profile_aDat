<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;
use App\Portfolios;


class CategoriesController extends Controller
{
    public function getCategories()
    {
        $portfolios = Portfolios::get();
        $portfolio = Portfolio::get();
        $data = [
            'portfolios' => $portfolios,
            'portfolio' => $portfolio, 
        ];
        return view('admin.categories', $data);
    }
    
    public function postEditCategories(Request $request, $id)
    {
        $portfolio = Portfolio::findOrFail($id);
        $data = [
            'name' => $request->name,
        ];
        $portfolio->update($data);
        return redirect()->back()->with('alert_suscess', 'Sửa danh mục thành công');
    }

    public function postAddCategories(Request $request)
    {
        $request->validate([
            'categories' => 'required'
        ]);
        $data = [
            'name' => $request->name,
            'video' => $request->video,
            'img' => $request->img,
            'id_categoeries' => $request->categories,
        ];
        Portfolios::create($data);
        return redirect()->back()->with('alert_suscess', 'Thêm thành công');
    }

    public function postEditCategoriess(Request $request, $id)
    {
        $portfolio = Portfolios::findOrFail($id);
        $data = [
            'name' => $request->name,
            'video' => $request->video,
            'img' => $request->img,
        ];
        $portfolio->update($data);
        return redirect()->back()->with('alert_suscess', 'Sửa post thành công');
    }
}
