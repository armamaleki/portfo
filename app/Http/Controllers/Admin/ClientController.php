<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        if (!Cache::has('user')) {
            $user = User::find(1);
            Cache::put('user', $user);
        }
    }

    public function index()
    {
        $clients = Client::paginate(15);
        return view('admin.clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();

        return view('admin.clients.create', compact('user'));
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
            'avatar' => 'required',
            'company' => 'required',
            'address' => 'required|url',
        ]);
        $file = $request->file('avatar');
        $new_name = time() . '-' . $file->getClientOriginalName();
        $file->move(public_path('assets/img/clients'), $new_name);
        $data['avatar'] = $new_name;
        $validate = Client::create($data);
        return redirect()->route('client.edit', $validate['id']);
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
        $client = Client::find($id);
        return view('admin.clients.edit', compact('client'));
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
            'avatar' => 'required',
            'company' => 'required',
            'address' => 'required',
        ]);
        $file = $request->file('avatar');
        $new_name = time() . '-' . $file->getClientOriginalName();
        $file->move(public_path('assets/img/clients'), $new_name);
        $data['avatar'] = $new_name;
        $validate = Client::find($id)->update($data);
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
        $clien = Client::find($id);
        $clien->delete();
        return back();
    }
}
