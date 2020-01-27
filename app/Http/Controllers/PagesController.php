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

    public function dashboard() {
        return view('pages.dashboard');
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
        
        return view('pages.post')->with('post', $post);

        // $post = \DB::table('posts')->where('slug', $slug)->first();

        // return view('post', [
        //     'post' => $post
        // ]);

    }
}
