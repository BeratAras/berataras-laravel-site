<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//Models
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        $data['categories']=Category::orderBy('id', 'DESC')->get();
        return view('back.categories.index',$data);
    }

    public function create(Request $request){
            $category = new Category;
            $category->category_name        = $request->title;
            $category->category_keywords    = $request->keywords;
            $category->category_slug        = str_slug($request->title);

            if($request->hasFile('file_banner')){
                $file_bannerName    = str_slug($request->title).'.'.$request->file_banner->getClientOriginalExtension();
                $request->file_banner->move(public_path('img/category_img'), $file_bannerName);

                $category->category_files   = $file_bannerName;
            }
            $category->save();
            return redirect()->route('categories');
    }

    public function getData(Request $request){
        $category=Category::findOrFail($request->id);
        return response()->json($category);
    }

    public function update(Request $request){
            // $category = Category::findOrFail($request->id);
            // $category->category_name        = $request->title;
            // $category->category_keywords    = $request->keywords;
            // $category->category_slug        = str_slug($request->title);

            // if($request->hasFile('file_banner')){
            //     $file_bannerName    = str_slug($request->title).'.'.$request->file_banner->getClientOriginalExtension();
            //     $request->file_banner->move(public_path('img/category_img'), $file_bannerName);

            //     $category->category_files   = $file_bannerName;
            // }
            // $category->save();
            // return redirect()->route('categories');
            return 'update controller';
    }

    public function toggleUpdateCategory(Request $request){
        $category=Category::findOrFail($request->id);
        $category->category_status=$request->status=="true" ? 1 : 0;
        $category->save();
    }
}
