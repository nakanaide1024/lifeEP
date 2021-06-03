@extends('top')
@section('content')
  <div class="container" style="margin-top: 5%;">
    <div class="row border-bottom align-items-end">
      <div class="col-lg-6 display-2">
        {{ $auth->nickname }}
      </div>
      <div class="col-lg-3" style="line-height: 4rem;">エピソードを追加する</div>
      <div class="col-lg-3" style="line-height: 4rem;">共有する</div>
    </div>
    <d class="row" style="line-height: 4rem; margin-top: 2rem;">
      <div class="col-4"></div>
      <div class="col-4 border-bottom text-center align-bottom">category</div>
      <div class="col-4"></div>
    </div>
  </div>
@endsection