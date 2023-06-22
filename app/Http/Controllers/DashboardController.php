<?php

namespace App\Http\Controllers;

use App\Models\Stamp;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $stamps = Stamp::all();


        return view('dashboards.index', compact(['stamps']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('dashboards.stamp.new');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // 画像ファイルのアップロード処理



        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image',
        ]);

        $imagePath = $request->file('image')->store('uploads', 'public');
        // $url = Storage::url($imagePath);

        // データベースへの保存処理

        if (!$imagePath) {
            return redirect()->route('dashboard.create');
        }

        // データベースへの保存処理
        Stamp::create([
            'title' => $request->title,
            'image_url' => $imagePath,
            'description' => $request->description,
        ]);

        return redirect()->route('dashboard.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $stamp = Stamp::find($id);

        return view('dashboards.stamp.edit', compact(['stamp']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //



        //
        // 画像ファイルのアップロード処理
        if ($request->file('image')) {
            $validate = $request->validate([
                'title' => 'required',
                'description' => 'required',
                'image' => 'required|image',
            ]);

            $imagePath = $request->file('image')->store('uploads', 'public');
        }


        // データベースへの保存処理

        if (!$imagePath) {
            session()->flash('errorMessage', $validate);
            return redirect()->route('dashboard.edit');
        }

        // データベースへの保存処理
        Stamp::updateOrCreate([
            'title' => $request->title,
            'image_url' => $imagePath,
            'description' => $request->description,
        ]);
        session()->flash('flashmessage', '画像情報の更新が完了しました');


        return redirect()->route('dashboard.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
