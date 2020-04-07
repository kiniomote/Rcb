<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class MainController extends Controller
{
    function index() {
        $news = News::orderBy('created_at', 'desc')->paginate(3);
        return view('main', compact('news'));
    }
}
