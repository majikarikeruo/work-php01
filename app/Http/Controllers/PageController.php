<?php

namespace App\Http\Controllers;


use App\Models\Page;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //

    public function index()
    {

        return view('dashboards.page.index');
    }

    public function create()
    {

        return view('dashboards.page.new');
    }

    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'content' => 'required',
        ]);

        Page::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'content' => $request->content,
        ]);

        session()->flash('flashmessage', ' ページの登録が完了しました');


        return redirect()->route('dashboard.page.index');


    }

    public function edit()
    {

    }
    public function update()
    {

    }

    public function destroy()
    {

    }

}
