<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use DB;

class SettingController extends Controller
{

    public function index () {
        $setting = DB::table('settings')->get()->first();
        // dd($setting);
        return view('pages.admin.setting.setting',compact('setting'));
        }

    public function data(Request $request){

        $request->validate([
        'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'title'=> 'nullable',
        'tagline'=> 'nullable',
        'email' => 'nullable',
        'phone_no' => 'nullable',
        'Location' => 'nullable',
        'facebook' => 'nullable',
        'tweeter' => 'nullable',
        'instagram' => 'nullable',
        'pintrest' => 'nullable',
        'youtube' => 'nullable',
        'copyright' => 'nullable',
    ]);

    $setting = Setting::firstOrNew([ 'id' => $request->id]);
    // dd($request);
            $setting->title = $request->title;
            $setting->tagline = $request->tagline;
            $setting->email = $request->email;
            $setting->phone_no = $request->phone_no;
            $setting->location = $request->Location;
            $setting->facebook = $request->facebook;
            $setting->tweeter = $request->tweeter;
            $setting->instagram = $request->instagram;
            $setting->pintrest = $request->pintrest;
            $setting->youtube = $request->youtube;
            $setting->copyright = $request->copyright;
            $setting->save();
            if($request->hasFile('logo')){
                $imageName = $request->logo->getClientOriginalName();
                $imageName= time().'.'.$request->logo->extension();
                $request->logo->move(public_path('web_logo'), $imageName);
                $setting->logo = $imageName;
                $setting->save();
            }
            return back()->with('success','You data is updated!');
            }

}
