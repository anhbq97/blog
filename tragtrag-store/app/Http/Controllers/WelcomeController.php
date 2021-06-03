<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Category;
use App\User;

class WelcomeController extends Controller
{
	public function index()
	{
		$postsDontMiss = Post::where('section', 'dontmiss')->orderBy('created_at', 'DESC')->take(4)->get();
        $postsTrending = Post::where('section', 'whattrending')->orderBy('created_at', 'DESC')->take(5)->get();
        $postsLatest = Post::where('section', 'latest')->orderBy('created_at', 'DESC')->take(10)->get();
        $postsStories = Post::where('section', 'storie')->orderBy('created_at', 'DESC')->take(12)->get();
        $postsSlide = Post::where('section', 'slide')->orderBy('created_at', 'DESC')->take(3)->get();

        $categorys = Category::all();
        $users = User::select('id', 'name')->get();

        return view('welcome', [
            'postsDontMiss' => $postsDontMiss, 
            'postsTrending' => $postsTrending,
            'postsLatest' => $postsLatest,
            'postsStories' => $postsStories,
            'postsSlide' => $postsSlide,
            'categorys' => $categorys,
            'users' => $users
        ]);
	}

    public function post($id)
    {
        if (is_numeric($id) == FALSE) {
            return abort('404', 'param only a number');
        }

        $categorys = Category::all();

        $post = Post::leftJoin('users', function($join) {
          $join->on('posts.author', '=', 'users.id');
        })
        ->where('posts.id', $id)
        ->first();

        if (!$post) {
            return abort('404', 'The post you are looking for was not found');
        }

        return view('single-post', [
            'post' => $post,
            'categorys' => $categorys
        ]);
    }

    public function store()
    {
        $categorys = Category::all();

    	return view('store', [
            'categorys' => $categorys
        ]);
    }

    public function checkSsl()
    {
    	$txt = file_get_contents('2E9F95A8F5AD6B322896020C5A87839C');
    	return $txt;
    }
}
