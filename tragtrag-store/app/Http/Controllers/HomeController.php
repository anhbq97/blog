<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use Validator;
use Response;
use App\http\Requests;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publicPosts = Post::select('author', 'visibility')->get();
        
        $countVisibility = 0;
        $countPublic = 0;
        $authors = [];

        foreach ($publicPosts as $key => $value) {
            array_push($authors, $value->author);

            if ($value->visibility == 1) {
                $countPublic++;
            } elseif ($value->visibility == 0) {
                $countVisibility++;
            }

        }

        $countAuthor = array_count_values($authors);
        $allPost = $countPublic+$countVisibility;
        
        return view('home', [
            'publicPosts' => $countPublic, 
            'privatePosts' => $countVisibility,
            'allPost' => $allPost,
            'countAuthor' => count($countAuthor)
        ]);
    }

    public function posts()
    {
        return view('post');
    }

    public function addBlog()
    {
        $category = Category::all();

        return view('add-blog', [
            'category' => $category
        ]);
    }

    public function user()
    {
        return view('user');
    }

    public function addCategory(Request $req)
    {
        $this->validate($req, [
            'name' => 'required',
        ]);

        $category = Category::where('name', $req->name)->first();
        
        if ($category) {
            return response()->json(['name' => 'Ô đã có dữ liệu rùi nhe!'], 422);
        }

        $category = new Category;
        $category->name = $req->name;

        if ($category->save()) {
            return response()->json($category);
        }

        return response()->json(['name' => 'Lỗi tạo Danh mục!'], 200);
    }

    public function addPost(Request $req)//Thằng này chưa check đúng checkbox đâu nha
    {
        $this->validate($req, [
            'title' => 'required|max:255',
            'content' => 'required',
            'summary' => 'required',
            'image' => 'required',
            'author' => 'required', 
            'category' => 'required',
            'tags' => 'required',
            'section' => 'required',
            'visibility' => 'required',
            'status' => 'required',
            'schedule' => 'nullable',
            'readability' => 'required'
        ]);

        $post = new Post;

        $post->title = $req->title;
        $post->content = $req->content;
        $post->summary = $req->summary;
        $post->image = $req->image;
        $post->author = $req->author;
        $post->category = $req->category;
        $post->tags = $req->tags;
        $post->section = $req->section;
        $post->visibility = $req->visibility;
        $post->status = $req->status;
        $post->schedule = $req->schedule;
        $post->readability = $req->readability;

        $post->save();
        
        if ($post->save()) {
            return response()->json(['name' => 'Tạo bài viết Thành công!'], 200);
        }
        
        return response()->json(['name' => 'Lỗi tạo bài viết!'], 422);
    }
}
