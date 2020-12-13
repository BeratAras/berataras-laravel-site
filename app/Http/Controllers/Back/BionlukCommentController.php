<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//Models
use App\Models\BionlukComment;


class BionlukCommentController extends Controller
{
    public function index(){
        $comments = BionlukComment::all();
        return view('back.bionluk_comments.index', compact('comments'));
    }

    public function create(){
        return view('back.bionluk_comments.create');
    }

    public function store(Request $request){
        
        $data = array(
            'username'  => $request->username,
            'comment'   => $request->comment,
            'user_photo' => $request->photo_link
        );

        BionlukComment::create($data);

        return redirect()->route('bionluk-comments.index');
    }

    public function updatePage($id){
        $comment = BionlukComment::where('id', $id)->first();
        return view('back.bionluk_comments.edit', compact('comment'));
    }

    public function update(Request $request, $id){
        $data = array(
            'username'  => $request->username,
            'comment'   => $request->comment,
            'user_photo' => $request->photo_link
        );

        BionlukComment::where('id', $id)->update($data);

        return redirect()->route('bionluk-comments.index');
    }

    public function delete($id){
        BionlukComment::where('id', $id)->delete();
        return redirect()->route('bionluk-comments.index');
    }
}
