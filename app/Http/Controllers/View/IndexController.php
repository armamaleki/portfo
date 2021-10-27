<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Cv;
use App\Models\Design;
use App\Models\Portfolio;
use App\Models\Post;
use App\Models\Service;
use App\Models\Client;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use League\CommonMark\Extension\CommonMark\Parser\Inline\EntityParser;
use Illuminate\Support\Facades\Cache;
use MongoDB\Driver\Session;

class IndexController extends Controller
{
    public function __construct()
    {
        if (!Cache::has('user')) {
            $user = User::find(1);
            Cache::put('user', $user);
        }
    }

    public function index()
    {

        $client = Client::paginate(15);
        $cv = Cv::paginate(15);
        $design = Design::paginate(15);
        $portfolio = Portfolio::with('galleries')->get();
        $services = Service::with('user')->paginate(15);
        $posts = Post::with('user')->paginate(15);
        $user = User::latest()->first();
        $title = 'تایتل صفحه ';
        return view('index', compact('services', 'client', 'cv', 'design', 'posts', 'user', 'title', 'portfolio'));
    }


    public function show($id)
    {

        $post = Post::with([
            'comments' => function ($q) {
                $q->where('status', '1')->orderBy('id', 'desc');
            }
        ])->where('slug', $id)->firstOrFail();
        return view('post', compact('post',));
    }


    public function postComment(Request $request)
    {

        if ($request->post_id) {
            $post = Post::find($request->post_id);
            $post->comments()->create([
                'title' => $request->title,
                'email' => $request->email,
                'body' => $request->body,
            ]);
        }

        if ($request->user_id) {
            $post = User::find($request->user_id);
            $post->comments()->create([
                'title' => $request->title,
                'email' => $request->email,
                'body' => $request->body,
            ]);
        }
        session()->flash('msg', 'کامنت با موفقیت ثبت شد');
        return back();
    }

    public function portfolio($id)
    {
        $portfo = Portfolio::with('galleries')->where('slug', $id)->firstOrFail();
        return view('portfo', compact('portfo',));

    }
}
