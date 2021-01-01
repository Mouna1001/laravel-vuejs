<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use JD\Cloudder\Facades\Cloudder;

class UploadImageController extends Controller
{
    public function index()
    {
        return view('website.uploadimage');
    }

    public function uploadImage(Request $request){

        $input = $request->all();

        //dd($input);

        $this->validate($request,[
            'image_name' => 'required|mimes:jpeg,bmp,jpg,png|between:1, 10000',
        ]);

        $imageName = $request->file('image_name');

        $result = Cloudder::upload($imageName->getRealPath(), 'example/laravel/mbigfile');

        dd($result->getResult());
    }
}
