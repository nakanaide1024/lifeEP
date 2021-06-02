<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EpisodeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * top.blade.phpを呼び出しトップページを出力する
     * @param void
     * @return view
     */
    public function index(){
        return view('first');
    }

    /**
     * マイページを呼び出す
     * @param void
     * @return view
     */

     public function show(){
         $auth = Auth::user();
         return view('user.mypage', ['auth' => $auth]);
     }
}
