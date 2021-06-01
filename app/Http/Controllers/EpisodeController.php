<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EpisodeController extends Controller
{
    //top.blade.phpを呼び出しトップページを出力する
    public function index(){
        return view('first');
    }
}
