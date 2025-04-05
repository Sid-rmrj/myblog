<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use PhpParser\Node\Stmt\TryCatch;
use Throwable;

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
        try{
            $post = Post::findOrFiail($id);
            return view('posts.detail', compact('post'));
        }catch(\Throwable $th){
            //throw $th;
            
        }
        
        // $post = collect($posts)-> firstWhere('id',$id);
       
    }
    public function oldUrl() {
        return redirect()->route('new_url');
    }

    public function newUrl() {
        return '<h1>New URL Page</h1>';
    }
}
