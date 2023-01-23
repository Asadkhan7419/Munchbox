<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use DB;

class CategoryController extends Controller
{
    public function indexCategory () {
        $categories = Category::all();
        return view('pages.admin.category.category', compact('categories'));
        }
    public function categoryForm () {
        return view('pages.admin.category.categoryForm');
        }

    public function categoryInsert (Request $request){

        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'nullable',
            'slug' => 'nullable',
            'description' => 'nullable',
         ]);

        $category =  new Category();
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->description = $request->description;
        $category->save();
        if($request->hasFile('image')){
            $imageName = $request->image->getClientOriginalName();
            $imageName= time().'.'.$request->image->extension();
            $request->image->move(public_path('web_logo'), $imageName);
            $category->image = $imageName;
            $category->save();
        }
        return redirect('/admin/category');
    }

    public function categoryEdit ($id){
        $categories = Category::find($id);
        return view('pages.admin.category.categoryEdit', compact('categories'));
    }

    public function categoryUpdate (Request $request, $id){
        $request->validate([
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'name' => 'nullable',
                'slug' => 'nullable',
                'description' => 'nullable',
             ]);

            $category = Category::find($id);
            $category->name = $request->name;
            $category->slug = $request->slug;
            $category->description = $request->description;
            $category->update();
            if($request->hasFile('image')){
                $imageName = $request->image->getClientOriginalName();
                $imageName= time().'.'.$request->image->extension();
                $request->image->move(public_path('web_logo'), $imageName);
                $category->image = $imageName;
                $category->update();
            }
            return redirect('/admin/category');
    }

    public function categoryDelete($id){
        $category = Category::find($id);
        $category->delete();
        return back();
    }
}
