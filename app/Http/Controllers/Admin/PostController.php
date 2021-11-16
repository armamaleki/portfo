<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class PostController extends Controller
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
        $posts=Post::with('user')->paginate(15);
        return view('admin.posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $category=Category::all();
        return view('admin.posts.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data=$request->validate([
            'title'=>'required',
            'body'=>'required',
            'avatar'=>'required',
        ]);

        $image=$request->file('avatar');
        $new_name=time().'-'.$image->getClientOriginalName();
        $image->move(public_path('img/blog/avatar'),$new_name);
        $data['avatar']=$new_name;
        $data['user_id'] = Auth::user()->id;
        $data['slug']=str_replace(' ', '-' ,$request['title']);

        $post=Post::create($data);
        foreach ($request->category as  $cat) {
            $post->categories()->attach($cat);
        }
        return back();

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
        $post=Post::with('categories')->find($id);
        $category=Category::all();
        return view('admin.posts.edit', compact('post','category'));

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

        $data=$request->validate([
            'title'=>'required',
            'body'=>'required',
            'avatar'=>'required',
            'status'=>'required',
        ]);

        $image=$request->file('avatar');
        $new_name=time().'-'.$image->getClientOriginalName();
        $image->move(public_path('img/blog/avatar'),$new_name);
        $data['avatar']=$new_name;
        $data['user_id'] = Auth::user()->id;
        $data['slug']=str_replace(' ', '-' ,$request['title']);

        $post=Post::find($id);
        $post->update($data);

        foreach ($request->category as  $cat) {
            $post->categories()->sync($cat);
        }
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
        $post=Post::find($id)->delete();
        return back();
    }
}
