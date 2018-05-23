<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'WElcome to Laravel';
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('tatle', $title);
    }

    public function about(){
        $title = 'About';
        return view('pages.about')->with('tatle', $title);
    }

    public function services(){
        $data = array(
            'title' => 'services',
            'services' => ['WEb Design', 'Learning Laravel', 'Dope SHit']
        );
        return view('pages.services')->with($data);
    }
}
