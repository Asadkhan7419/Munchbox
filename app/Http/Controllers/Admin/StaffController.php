<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Staff;
use DB;
use Hash;

class StaffController extends Controller
{

     public function indexStaff () {
        $staff = Staff::all();
       return view('pages.admin.staff.staff', compact('staff'));
       }
     public function addStaff () {
       return view('pages.admin.staff.staffForm');
       }

       public function staffInsert (Request $request){
        $request->validate([

            'name' => 'required',
                'email' => 'required|email',
                'password' => 'required|min:8',
         ]);
        $staff =  new Staff();
        $staff->name = $request->name;
        $staff->email = $request->email;
        $staff->password = Hash::make($request->password);
        $staff->save();
        return redirect('/admin/staff');
        }

        public function staffEdit ($id){
            $staff = Staff::find($id);
            return view('pages.admin.staff.staffEdit', compact('staff'));
        }

        public function staffUpdate (Request $request, $id){
            $request->validate([
                    'name' => 'required',
                    'email' => 'required',
                    'password' => 'required',
                 ]);
                $staff = Staff::find($id);
                $staff->name = $request->name;
                $staff->email = $request->email;
                $staff->password = $request->password;
                $staff->update();
                return redirect('/admin/staff');
        }

        public function staffDelete($id){
            $staff = Staff::find($id);
            $staff->delete();
            return back();
        }

}
