<?php

namespace App\Http\Controllers;

use App\Models\Stamp;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class AppController extends Controller
{
    //

    public function index()
    {

        $query = Stamp::query();
        $stamps = $query->get();

        return view('index', compact(['stamps']));
    }

    public function about()
    {

        return view('about');
    }
    public function taisou()
    {

        return view('taisou');
    }
    public function howtouse()
    {

        return view('howtouse');
    }

    public function contact()
    {

        return view('contact');
    }

    public function download(Request $request)
    {

        $pathToFile = public_path() . Storage::url($request->filename);
        $filename = $request->filename;
        $headers = ['Content-Type' => 'image/png'];
        return response()->download($pathToFile, str_replace(['/', '\\'], '-', $filename), $headers);
    }
}
