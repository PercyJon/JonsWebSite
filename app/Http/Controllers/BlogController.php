<?php

namespace App\Http\Controllers;

use App\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;

class BlogController extends Controller
{
    public function index(){

        $posts = Post::where('published_at','<=',Carbon::now())
            ->orderBy('published_at','desc')
            ->paginate(config('blog.post_per_page'));

        return view('blog.articles', compact('posts'));
    }

    public function showPost($slug){

        $post = Post::where('slug',$slug)->firstOrFail();

        return view('blog.articlecontent')->withPost($post);
    }
}
