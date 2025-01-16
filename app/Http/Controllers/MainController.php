<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;

class MainController extends Controller
{
    public function index(): View
    {
        $posts = Post::with('user')->orderBy('id', 'desc')->get();

        return view('dashboard', ['posts' => $posts]);
    }

    public function createPost()
    {
        if(Gate::denies('post.create')){
            abort(403, 'You do not have permission to create posts');
        }
        
        return view('create-post');
    }

    public function storePost(Request $request){
        if(Gate::denies('post.create')){
            abort(403, 'You do not have permission to create posts');
        } 

        $request->validate([
            'title' => 'required|min:3|max:100',
            'content' => 'required|min:3|max:1000'
        ]);

        Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => Auth::user()->id
        ]);

        return redirect()->route('dashboard');
    }

    public function deletePost($id)
    {
        $post = Post::find(decrypt($id));

        if(Gate::denies('post.delete', $post)){
            abort(403, 'You do not have permission to delete this post');
        } 

        $post->delete();

        return redirect()->route('dashboard');
    }
}
