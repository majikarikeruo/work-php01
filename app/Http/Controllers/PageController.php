<?php

namespace App\Http\Controllers;


use App\Models\Page;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //

    public function index(Request $request)
    {
        //slug
        // $slug = $request->path();
        // $page = Page::where('slug', $slug)->first();
        // var_dump($page);

        // if(is_null($page)) abort(404);

        // $contents = $page->contents;
        $query = Page::query();

        $pages = $query->paginate(10);



        return view('dashboards.page.index',compact(['pages']));
    }

    public function search(){

        $query = Page::query();

        $pages = $query->paginate(10);




        return view('dashboards.page.search',compact(['pages']));

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

    public function edit(string $id)
    {
        $page = Page::find($id);

        return view('dashboards.page.edit', compact(['page']));
    }
    public function update()
    {

    }

    public function destroy()
    {

    }

}
