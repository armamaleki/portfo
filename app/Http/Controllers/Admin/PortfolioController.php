<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfo = Portfolio::paginate(20);
        return view('admin.portfo.index', compact('portfo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category=Category::all();
        return view('admin.portfo.create',compact('category'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'client' => 'required',
            'avatar' => 'required',
            'url' => 'required|url',
            'body' => 'required',
        ]);
        $image = $request->file('avatar');
        $new_name = time() . '-' . $image->getClientOriginalName();
        $image->move(public_path('img/portfolio/avatar'), $new_name);
        $data['avatar'] = $new_name;
        $data['slug'] = str_replace(' ', '-', $request['title']);
        $portfo = Portfolio::create($data);

        foreach ($request->category as  $cat) {
            $portfo->categories()->attach($cat);
        }

        return redirect()->route('portfolio.edit', $portfo);
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
        $portfo = Portfolio::find($id);
        return view('admin.portfo.edit', compact('portfo'));
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
        $data = $request->validate([
            'title' => 'required',
            'client' => 'required',
            'avatar' => 'required',
            'url' => 'required|url',
            'body' => 'required',
        ]);
        $image = $request->file('avatar');
        $new_name = time() . '-' . $image->getClientOriginalName();
        $image->move(public_path('img/portfolio/avatar'), $new_name);
        $data['slug'] = str_replace(' ', '-', $request['title']);
        $data['avatar']=$new_name;
        $portfo = Portfolio::find($id)->update($data);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Portfolio::find($id)->delete();
        return back();
    }
}
