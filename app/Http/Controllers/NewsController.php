<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    function index() {
        $news = News::orderBy('created_at', 'desc')->paginate(10);
        return view('news', compact('news'));
    }

    function post($id) {
        $post = News::findOrFail($id);
        event('postHasViewed', $post);
        return view('post', compact('post'));
    }
}
