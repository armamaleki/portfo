<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Gallery;
use App\Models\Portfolio;
use App\Models\Post;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return string
     */
    private function uploadImage($file)
    {
        $new_name = time() . '-' . $file->getClientOriginalName();
        $file->move(public_path('img'), $new_name);
        return $new_name;
    }

    public function store(Request $request)
    {

//        dd($request->toArray());
        if ($request->portfo_id) {
            $portfo = Portfolio::find($request->portfo_id);
            $data = $request->validate([
                'file' => 'required',
            ]);
            $file = $request->file('file');
            $img = Image::make($request->file('file')->getRealPath());
            $new_name = time() . '-' . $file->getClientOriginalName();
            $file->move(public_path('img/portfolio'), $new_name);
            $portfo->galleries()->create([
                'file' => $new_name
            ]);

            $img->resize(200,200);
            $img->save(public_path('img/portfolio/320') . "/" . $new_name,80);

        }
        if ($request->post_id) {
            $portfo = Post::find($request->post_id);
            $data = $request->validate([
                'file' => 'required',
            ]);
            $file = $request->file('file');
            $img = Image::make($request->file('file')->getRealPath());
            $new_name = time() . '-' . $file->getClientOriginalName();
            $file->move(public_path('img/blog'), $new_name);
            $portfo->galleries()->create([
                'file' => $new_name
            ]);

            $img->resize(200, 200);
            $img->save(public_path('img/portfolio/320') . "/" . $new_name, 80);

        }


    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
