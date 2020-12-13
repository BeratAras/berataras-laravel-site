<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//Models
use App\Models\Setting;

class SettingsController extends Controller
{
    public function index()
    {
        $settings = Setting::where('id', 1)->first();
        return view('back.settings.index', compact('settings'));
    }

    public function update(Request $request, $id)
    {
        
        $upload_path = 'front/images/settings';

        $logo = $request->file('logo_file'); 
        $favicon = $request->file('favicon_file'); 

        if($logo && $favicon){

            $logo_name = date('dmy_H_s_i');
            $favicon_name = date('dmy_H_s_i');

            $ext_logo = strtolower($logo->getClientOriginalExtension());
            $ext_favicon = strtolower($favicon->getClientOriginalExtension());

            $logo_full_name = $logo_name.'.'.$ext_logo;
            $favicon_full_name = $favicon_name.'.'.$ext_favicon;

            $logo_url = $upload_path.$logo_full_name;
            $favicon_url = $upload_path.$favicon_full_name;

            $success = $logo->move($upload_path, $logo_full_name);
            $success = $favicon->move($upload_path, $favicon_full_name);

            $data = array(
                'logo'      =>  $logo_url,
                'favicon'   =>  $favicon_url,
                'title'     =>  $request->title,
                'keywords'  =>  $request->keywords,
                'facebook'  =>  $request->facebook,
                'twitter'   =>  $request->twitter,
                'instagram' =>  $request->instagram,
                'twitch'    =>  $request->twitch,
            );
            Setting::where('id', $id)->update($data);
            return Redirect()->back();
        }else if($logo){
            $logo_name = date('dmy_H_s_i');
            $ext_logo = strtolower($logo->getClientOriginalExtension());
            $logo_full_name = $logo_name.'.'.$ext_logo;
            $logo_url = $upload_path.$logo_full_name;
            $success = $logo->move($upload_path, $logo_full_name);
            $data = array(
                'logo'      =>  $logo_url,
                'title'     =>  $request->title,
                'keywords'  =>  $request->keywords,
                'facebook'  =>  $request->facebook,
                'twitter'   =>  $request->twitter,
                'instagram' =>  $request->instagram,
                'twitch'    =>  $request->twitch,
            );
            Setting::where('id', $id)->update($data);
            return Redirect()->back();
        }else if($favicon){
            $favicon_name = date('dmy_H_s_i');
            $ext_favicon = strtolower($favicon->getClientOriginalExtension());
            $favicon_full_name = $favicon_name.'.'.$ext_favicon;
            $favicon_url = $upload_path.$favicon_full_name;
            $success = $favicon->move($upload_path, $favicon_full_name);
            $data = array(
                'favicon'   =>  $favicon_url,
                'title'     =>  $request->title,
                'keywords'  =>  $request->keywords,
                'facebook'  =>  $request->facebook,
                'twitter'   =>  $request->twitter,
                'instagram' =>  $request->instagram,
                'twitch'    =>  $request->twitch,
            );
            Setting::where('id', $id)->update($data);
            return Redirect()->back();
        }else{
            $data = array(
                'title'     =>  $request->title,
                'keywords'  =>  $request->keywords,
                'facebook'  =>  $request->facebook,
                'twitter'   =>  $request->twitter,
                'instagram' =>  $request->instagram,
                'twitch'    =>  $request->twitch,
            );
            Setting::where('id', $id)->update($data);
            return Redirect()->back();
        }
    }
}
