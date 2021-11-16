<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;
use App\Models\Task;

class ImageController extends Controller
{
    public function store(Request $request)
    {

//        $task = new Task();
//        $task->id = 0;
//        $task->exists=true;
//        $image = $task->addMediaFromRequest('upload')->toMediaCollection('images');
//
//
        $file=$request->file('upload');
        $name=time().'-'.$file->getClientOriginalName();
        $file->move(public_path('/img/blog/'),$name);
        $image=Image::create([
           'upload'=>$name
        ]);
        return response()->json([
            'url' => '/img/blog/'.$name
        ]);
    }
}
