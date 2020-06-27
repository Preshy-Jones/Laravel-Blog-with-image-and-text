<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pagescontroller extends Controller
{
    public function index(){
        return view('pages.index');
    }
    public function about(){
        return view('pages.about');
    }
    public function services(){

        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Photoshop', 'Devops']
        );

        return view('pages.services')->with($data);
    }
}
