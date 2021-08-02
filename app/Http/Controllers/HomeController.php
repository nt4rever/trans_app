<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Price;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.index')->with('home', 'active');
    }

    public function price()
    {
        $price = Price::firstOrFail();
        return view('pages.price', compact('price'));
    }

    public function service()
    {
        $service = Service::all();
        return view('pages.service')->with('service', $service);
    }

    public function service_detail($slug)
    {
        $service = Service::where('service_slug', $slug)->firstOrFail();
        return view('pages.service_detail')->with('service', $service);
    }

    public function post()
    {
        $post = Post::all();
        return view('pages.post')->with('post', $post);
    }

    public function post_detail($slug)
    {
        $post = Post::where('post_slug', $slug)->firstOrFail();
        return view('pages.post_detail')->with('post', $post);
    }
}
