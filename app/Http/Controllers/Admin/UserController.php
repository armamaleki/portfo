<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'صفحه ادمیین';
        $user = Auth::user();
        $comment = User::with('comments')->get();
        return view('admin.user.index', compact('user', 'title', 'comment'));
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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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
//        dd($request->toArray());

        $data = $request->validate([
            'name' => 'required|max:250',
            'lastname' => 'required',
            'residence' => 'required',
            'address' => 'required',
            'email' => 'required|email:rfc,dns',
            'about' => 'required',
            'avatar' => 'required',
            'instagram' => 'required|url',
            'linkedin' => 'required|url',
            'youtube' => 'required|url',
            'facebook' => 'required|url',
            'twitter' => 'required|url',
        ]);
//        dd($data);
        $file = $request->file('avatar');
        $new_name = time() . '-' . $file->getClientOriginalName();
        $file->move(public_path('assets/img/profile'),$new_name);
        $data['avatar']=$new_name;
        $user = User::find($id)->update($data);
        session()->flash('msg', 'کافه جدید ساخته شد');

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
        //
    }


}
