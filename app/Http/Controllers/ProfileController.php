<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;

class ProfileController extends Controller
{
    public function getProfile()
    {
        $profile = Profile::get();
        $data = [
            'profile' => $profile,
        ];
        return view('admin.profiles', $data);
    }

    public function getEditProfile(Request $request, $id)
    {
        $profile = Profile::findOrFail($id);
        $data = [
            'key_name' => $request->name,
            'value_name' => $request->value,
        ];
        $profile->update($data);
        return redirect()->back()->with('alert_suscess', 'Sửa thông tin cá nhân thành công.');
        
    }

    public function postAddProfile(Request $request)
    {
        $data = [
            'key_name' => $request->name,
            'value_name' => $request->value,
        ];
        Profile::create($data);
        return redirect()->back()->with('alert_suscess', 'Thêm thông tin thành công');
    }

    public function getDeleteProfile($id)
    {
        $profile = Profile::findOrFail($id);
        $profile->delete();
        return redirect()->back()->with('alert_suscess', 'Xóa thông tin thành công.');

    }
}
