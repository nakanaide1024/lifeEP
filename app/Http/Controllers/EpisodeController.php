<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EpisodeController extends Controller
{

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
         if(!Auth::check()){
             return view('first');
         }else{
             $auth = Auth::user();
             return view('user.mypage', ['auth' => $auth]);
         }
     }
}
