<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//Models
use App\Models\Banner;

class BannerController extends Controller
{
    public function index()
    {
        $banner = Banner::all();
        return view('back.banners.index', compact('banner'));
    }

    public function create()
    {
        return view('back.banners.create');
    }

    public function store(Request $request)
    {
        $image = $request->file('banner_file'); 

        if($image){
            $image_name = date('dmy_H_s_i');
            $upload_path = 'img/banner_img/';
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path, $image_full_name);

            $data = array(
                'banner_text'   => $request->banner_text,
                'banner_type'   => $request->banner_type,
                'banner_link'   => $request->banner_link,
                'banner_file'   => $image_url,
                'banner_status' => 1,
            );

            Banner::create($data);
            return redirect()->route('banner.index');
        }
    }

    public function edit($id)
    {
        $banner = Banner::where('id', $id)->first();
        return view('back.banners.edit', compact('banner'));
    }

    public function update(Request $request, $id)
    {
        $image = $request->file('banner_file'); 

        if($image){
            $image_name = date('dmy_H_s_i');
            $upload_path = 'img/banner_img/';
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path, $image_full_name);

            $data = array(
                'banner_text'   => $request->banner_text,
                'banner_type'   => $request->banner_type,
                'banner_link'   => $request->banner_link,
                'banner_file'   => $image_url,
            );

            Banner::where('id', $id)->update($data);
            return Redirect()->back();
        }else{
            $data = array(
                'banner_text'   => $request->banner_text,
                'banner_type'   => $request->banner_type,
                'banner_link'   => $request->banner_link,
            );

            Banner::where('id', $id)->update($data);

            return Redirect()->back();
        }
    }

    public function delete($id)
    {
        Banner::where('id', $id)->delete();
        return redirect()->route('banner.index');
    }
}
