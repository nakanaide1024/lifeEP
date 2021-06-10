<?php

namespace App\Http\Controllers;

use App\Models\Episode;
use App\Models\User;
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
     * @param int $id
     * @return view
     */

     public function show($id){

        $auth = User::find($id);
        $episodes = Episode::all();
        return view('user.mypage', ['auth' => $auth, 'episodes' => $episodes, 'id' => $id] );
    
     }

     /**
      * エピソード投稿ページを呼び出す
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
          if (!Auth::check()) {
              return view('first');
          } else {
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
              return redirect(route('show', ['id' => Auth::user()->id]));
          }
      }

      /**
      * エピソード編集ページを呼び出す
      *@param int $id
      *@return view
      */
     public function edit($id){
        if(!Auth::check()){
            return view('first');
        }else{

            $category = array('仕事','恋愛','趣味','日常');
            $episode = Episode::find($id);

            $auth = Auth::user();
            return view('user.edit', ['auth' => $auth, 'episode' => $episode, 'category' => $category]);
        }
     }

     /**
      * エピソードを編集する
      *
      *@param EpisodeRequest $request
      *@return view
      */
      public function exeUpdate(EpisodeRequest $request){
          if (!Auth::check()) {
              return view('first');
          } else {
              $inputs = $request->all();
        
              DB::beginTransaction();
              try {
                  //エピソードを更新
                  $episode = Episode::find($inputs['id']);
                  $episode->fill([
                'title' => $inputs['title'],
                'remarks' => $inputs['remarks'],
                'category' => $inputs['category'],
            ]);
                  $episode->save();
                  DB::commit();
              } catch (\Throwable $e) {
                  echo $e->getMessage();
                  DB::rollBack();
                  abort(500);
              }
              return redirect(route('show', ['id' => Auth::user()->id]));
          }
      }

      /**
      * エピソード削除
      *@param int $id
      *@return view
      */
        public function exeDelete($id){
        if(!Auth::check()){
            return view('first');
        }else{

            try {
                Episode::destroy($id);

            } catch (\Throwable $e) {
                echo $e->getMessage();
                abort(500);
            }
            
            return redirect(route('show', ['id' => Auth::user()->id]));
        }
     }

}
