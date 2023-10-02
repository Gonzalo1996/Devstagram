<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ImagenController extends Controller
{
    public function store(Request $request)
    {
        $image = $request->file('file');
        $nameImg = Str::uuid() . "." . $image->extension(); //genera un nombre unico 
        
        $serverImg = Image::make($image);
        $serverImg->fit(1000, 1000);

        $pathImg = public_path('uploads') . '/' . $nameImg;
        $serverImg->save($pathImg);

        return response()->json(['imagen' => $nameImg]);
    }
}
