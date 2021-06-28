<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Settings;
use App\Contact;

class MailController extends Controller
{
    public function getMail($slug)
    {
        if ($slug == 'chua-hoan-thanh') {
            $contact_suscess = Contact::where('status', 0)->orderby('created_at', 'DESC')->get();
            $data = [
                'contact_suscess' => $contact_suscess
            ];
            return view('admin.email', $data);
        }elseif ($slug == 'hoan-thanh') {
            $contact_suscess = Contact::where('status', 1)->orderby('created_at', 'DESC')->get();
            $data = [
                'contact_suscess' => $contact_suscess
            ];
            return view('admin.email', $data);

        }
        else {
            return redirect()->back();
        }
    }

    public function getSettings($slug)
    {
        if ($slug == 'cong-dong' || $slug == 'cau-hinh') {
            $data = [
                'slug' => $slug
            ];
            return view('admin.settings', $data);
        }else {
            return redirect()->back();
        }
        
    }

    public function postEditSetting(Request $request, $slug)
    {
        $data = [
            'name' => $request->name,
            'name_settings' => $request->value,
        ];
        Settings::where('slug_settings', $slug)->update($data);
        return redirect()->back()->with('alert_suscess', 'Sửa thông tin thành công.');
    }

    public function getEditMail(Request $request, $id)
    {
        $contact_status = Contact::where('id', $id)->first();
        if ($contact_status == null) {
            return redirect()->back();
        }
        if ($contact_status->status ==  1) {
            $data = [
                'status' => 0
            ];
            $contact_status->update($data);
        }
        if ($contact_status->status ==  0) {
            $data = [
                'status' => 1
            ];
            Contact::where('id', $id)->update($data);
        }
        return redirect()->back()->with('alert_suscess', 'Chuyển đổi trạng thái thành công.');
    }

    public function getDeleteMail($id)
    {
        $contact_delete = Contact::where('id', $id)->first();
        if ($contact_status == null) {
            return redirect()->back();
        }
        $contact_delete->delete();
        return redirect()->back()->with('alert_suscess', 'Xóa mail liên hệ thành công.');

    }
}
