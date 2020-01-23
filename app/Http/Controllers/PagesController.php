<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Post;

class PagesController extends Controller
{
    public function index() {
        $title = "Welcome!";
        return view('pages.index')->with('title', $title);
    }

    
    public function register() {
        $title = "Please Register here!!!";
        return view('pages.register', compact('title'));
    }
    
    public function login() {
        $title = "This is the login portal";
        return view('pages.login')->with('title', $title);
    }
    
    public function services() {
        $title = "Services are found here:";
        $data = array(
            'title' => 'Services are found here:',
            'services' => ['SEO', 'UI DESIGN', 'BACK END']
        );
        return view('pages.services')->with($data);
    }

    public function posts($slug) {

        $post = Post::where('slug', $slug)->firstOrFail();
        
        return view('pages.posts')->with('post', $post);
    }
}
