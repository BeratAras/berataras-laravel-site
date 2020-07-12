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

class Homepage extends Controller
{
    public function index(){
        $data['contents']=Content::orderBy('id', 'DESC')->paginate();
        $data['categories']=Category::inRandomOrder()->get();
        return view('front.homepage', $data);
    }

    public function contentDetail($slug){
        $content=Content::where('content_slug', $slug)->first();
        $content->increment('content_hit');
        $data['content']=$content;
        $data['categories']=Category::inRandomOrder()->get();
        return view('front.post',$data);
    }
    
    public function category($slug){
        $category=Category::where('category_slug', $slug)->first();
        $data['category']=$category;
        $data['contents']=Content::where('category_id', $category->id)->paginate(1);
        $data['categories']=Category::inRandomOrder()->get();
        return view('front.category', $data);
    }

    public function note(){
        $data['notes']=Note::get();
        $data['categories']=Category::inRandomOrder()->get();
        return view('front.note', $data);
    }

    public function about(){
        $data['abouts']=About::get();
        $data['categories']=Category::inRandomOrder()->get();
        return view('front.about', $data);
    }

    public function contact(){
        $data['contacts']=Contact::get();
        $data['categories']=Category::inRandomOrder()->get();
        return view('front.contact',$data);
    }
}
