<?php

namespace App\Http\Controllers;

use App\Models\Stamp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $sort = $request->input('sort');

        $query = Stamp::query();

        if ($sort) {
            if ($sort === 'created_at_desc') {
                $query->orderBy('created_at', 'desc');
            } elseif ($sort === 'created_at_asc') {
                $query->orderBy('created_at', 'asc');
            } elseif ($sort === 'title') {
                $query->orderBy('title', 'asc');
            }
        }

        $stamps = $query->paginate(10);


        return view('dashboards.index', compact(['stamps']));
    }


    public function search(Request $request)
    {
        $sort = $request->input('sort');
        $keyword = $request->input('query');
        $query = Stamp::query();

        if (!empty($keyword)) {
            $query->where('title', 'LIKE', "%{$keyword}%")
                ->orWhere('description', 'LIKE', "%{$keyword}%");

            if ($sort) {
                if ($sort === 'created_at_desc') {
                    $query->orderBy('created_at', 'desc');
                } elseif ($sort === 'created_at_asc') {
                    $query->orderBy('created_at', 'asc');
                } elseif ($sort === 'title') {
                    $query->orderBy('title', 'asc');
                }
            }
        }

        $stamps = $query->paginate(10);

        return view('dashboards.stamp.search', compact(['stamps', 'keyword']));
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
            return redirect()->route('dashboard.stamp.create');
        }

        // データベースへの保存処理
        Stamp::create([
            'title' => $request->title,
            'image_url' => $imagePath,
            'description' => $request->description,
        ]);

        session()->flash('flashmessage', '画像の登録が完了しました');


        return redirect()->route('dashboard.stamp.index');
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


        $imagePath = $request->image_url; // 画像のパスを初期化

        //
        // 画像ファイルのアップロード処理
        $validate = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image',
        ]);
        if ($request->file('image')) {


            $imagePath = $request->file('image')->store('uploads', 'public');
            // データベースへの保存処理

            if (!$imagePath) {
                session()->flash('errorMessage', '画像情報の更新に失敗しました');
                return redirect()->route('dashboard.stamp.edit', ['stamp' => $id]);
            }
        }

        // データベースへの保存処理
        Stamp::updateOrCreate(['id' => $id], [
            'title' => $request->title,
            'image_url' => $imagePath,
            'description' => $request->description,
        ]);
        session()->flash('flashmessage', '画像情報の更新が完了しました');


        return redirect()->route('dashboard.stamp.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //

        $stamp = Stamp::find($id);
        $stamp->delete();

        session()->flash('flashmessage', '画像の削除が完了しました');

        return redirect()->route('dashboard.stamp.index');
    }

    public function bulkDestroy(Request $request)
    {
        // リクエストから選択されたアイテムのIDを取得
        $selectedIds = explode(',', $request->input('deleteStamp'));

        // 選択されたアイテムを削除
        Stamp::whereIn('id', $selectedIds)->delete();


        session()->flash('flashmessage', '画像の削除が完了しました');


        return redirect()->route('dashboard.stamp.index');
    }
}
