<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //
    public function index(){
        $title="sid's blog";
        // $posts = $this->getPosts();
        $posts = Post::all();
        return view('posts.index',compact('title', 'posts'));
    }

    // private function getPosts(){
    //     return json_decode(json_encode([
    //         ['id' =>1, 'title' => 'Post1', 'content'=>'Content of Post 1'],
    //         ['id' =>2, 'title' => 'Post2', 'content'=>'Content of Post 2'],
    //     ]));
    // }

    public function detail($id){
        // $posts = $this->getPosts();
        $post = Post::find($id);
        // $post = collect($posts)-> firstWhere('id',$id);
        return view('posts.detail', compact('post'));
    }
    public function oldUrl() {
        return redirect()->route('new_url');
    }

    public function newUrl() {
        return '<h1>New URL Page</h1>';
    }
}
