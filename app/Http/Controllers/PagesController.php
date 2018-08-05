<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to RedHat Laravel';
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        return view('pages.about');
    }

    public function services(){

        $data = array('title'=>'Services', 'cats'=>['Development', 'Design', 'SEO']);
        return view('pages.services')->with($data);
    }
}
