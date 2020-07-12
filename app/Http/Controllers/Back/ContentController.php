<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//Model
use App\Models\Content;
use App\Models\Category;

class ContentController extends Controller
{
    
    public function index()
    {
        $data['contents']=Content::orderBy('id','ASC')->get();
        return view('back.contents.index', $data);
    }

    public function create()
    {
        $data['categories']=Category::all();
        return view('back.contents.create', $data);
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'title'         => 'required|min:3',
        //     'file_banner'   => 'required|image|mimes:jpeg,png,jpg|max:2048'
        // ]);

        $content = new Content;
        $content->category_id         = $request->categorySelect; 
        $content->content_title       = $request->title;
        $content->content_description = $request->description;
        $content->content_keywords    = $request->keywords;
        $content->content_slug        = str_slug($request->title);

        if($request->hasFile('file_banner') && $request->hasFile('file_in_banner')){
            $file_bannerName    = str_slug($request->title).'.'.$request->file_banner->getClientOriginalExtension();
            $file_in_bannerName = str_slug($request->title).'-IN'.'.'.$request->file_in_banner->getClientOriginalExtension();
            $request->file_banner->move(public_path('img/content_img'), $file_bannerName);
            $request->file_in_banner->move(public_path('img/content_img'), $file_in_bannerName);

            $content->content_file_banner   = $file_bannerName;
            $content->content_in_banner     = $file_in_bannerName;
        }
        $content->save();
        return redirect()->route('content.index');
    }

    
    public function show($id)
    {
        return $id;
    }

    
    public function edit($id)
    {
        $data['contents']=Content::findOrFail($id);
        $data['categories']=Category::all();
        return view('back.contents.update', $data);
    }

   
    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'title'         => 'required|min:3',
        //     'file_banner'   => 'required|image|mimes:jpeg,png,jpg|max:2048'
        // ]);

        $content = Content::findOrFail($id);
        $content->category_id         = $request->categorySelect; 
        $content->content_title       = $request->title;
        $content->content_description = $request->description;
        $content->content_keywords    = $request->keywords;
        $content->content_slug        = str_slug($request->title);

        if($request->hasFile('file_banner')){
            $file_bannerName    = str_slug($request->title).'.'.$request->file_banner->getClientOriginalExtension();
            $request->file_banner->move(public_path('img/content_img'), $file_bannerName);

            $content->content_file_banner   = $file_bannerName;
        }

        if($request->hasFile('file_in_banner')){
            $file_in_bannerName = str_slug($request->title). '-IN'. '.'.$request->file_in_banner->getClientOriginalExtension();
            $request->file_in_banner->move(public_path('img/content_img'), $file_in_bannerName);
            $content->content_in_banner     = $file_in_bannerName;
        }
        $content->save();
        return redirect()->route('content.index');
    }

    public function toggleUpdate(Request $request){
        $content=Content::findOrFail($request->id);
        $content->content_status=$request->status=="true" ? 1 : 0;
        $content->save();
    }

    public function delete($id){
        Content::find($id)->delete();
        return redirect()->route('content.index');
    }

    public function destroy($id)
    {
        //
    }
}
