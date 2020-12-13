<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//Models
use App\Models\Category;
use App\Models\Content;
use App\Models\Contact;
use App\Models\Note;
use App\Models\About;
use App\Models\BionlukComment;
use App\Models\Github;
use App\Models\Banner;
use App\Models\Setting;

class Homepage extends Controller
{
    public function index(){
        $data['comments']=BionlukComment::orderBy('id', 'ASC')->get();
        $data['github']=Github::all();
        $data['abouts']=About::get();
        $data['banner']=Banner::inRandomOrder()->get();
        $data['bannerBig']=Banner::where('banner_type', 'big')->first();
        $data['settings']=Setting::where('id', 1)->first();
        return view('front.homepage', $data);
    }
    
    public function about(){
        $data['settings']=Setting::where('id', 1)->first();
        $data['abouts']=About::get();
        return view('front.about', $data);
    }

    public function contact(){
        $data['settings']=Setting::where('id', 1)->first();
        $data['contacts']=Contact::get();
        $data['abouts']=About::get();
        return view('front.contact',$data);
    }
}
