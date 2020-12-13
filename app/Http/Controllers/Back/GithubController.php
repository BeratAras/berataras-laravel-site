<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//Models
use App\Models\Github;

class GithubController extends Controller
{
    public function index()
    {
        $github = Github::all();
        return view('back.github.index', compact('github'));
    }

    public function create()
    {
        return view('back.github.create');
    }

    public function store(Request $request)
    {
        $data = array(
            'repo_link' => $request->repo_link,
            'repo_svg'  => $request->repo_svg
        );

        Github::create($data);
        return redirect()->route('github.index');
    }

    public function edit($id)
    {
        $github = Github::where('id', $id)->first();
        return view('back.github.edit', compact('github'));
    }

    public function update(Request $request, $id)
    {
        $data = array(
            'repo_link' => $request->repo_link,
            'repo_svg'  => $request->repo_svg
        );

        Github::where('id', $id)->update($data);
        return redirect()->route('github.index');
    }

    public function delete($id)
    {
        Github::where('id', $id)->delete();
        return redirect()->route('github.index');
    }
}
