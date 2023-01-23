<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Auth;
use DB;

class ProfileController extends Controller
{
    public function profile(){
        return view('pages.user.profile');
    }

    public function updateProfile(Request $request){
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $user = auth()->user();
        if($request->has('image')){
            $imageName = $request->image->getClientOriginalName();
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('user_images'), $imageName);
            $user->image = $imageName;
        }
        $user->dob = $request->dob;
        $user->phone = $request->phone;
        $user->save();

        return back()
            ->with('success','You profile is updated!');
    }
}
