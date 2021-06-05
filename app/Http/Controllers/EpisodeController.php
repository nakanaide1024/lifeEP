<?php

namespace App\Http\Controllers;

use App\Models\Episode;
use App\Http\Requests\EpisodeRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

     /**
      * 投稿ページを呼び出す
      *
      *@return view
      */
     public function new(){
        if(!Auth::check()){
            return view('first');
        }else{
            $auth = Auth::user();
            return view('user.new', ['auth' => $auth]);
        }
     }

     /**
      * エピソードを投稿する
      *
      *@param EpisodeRequest $request
      *@return view
      */
      public function exeStore(EpisodeRequest $request){
    
        $inputs = $request->all();
        
        DB::beginTransaction();
        try {
            //エピソードを登録
            Episode::create($inputs);
            DB::commit();
        } catch (\Throwable $e) {
            echo $e->getMessage();
            DB::rollBack();
            abort(500);
        }
            return redirect(route('show'));
        }
}
