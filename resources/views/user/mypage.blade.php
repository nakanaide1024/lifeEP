@extends('top')
@section('content')
  <div class="container" style="margin-top: 5%;">
    <div class="row border-bottom align-items-end">
      <div class="col-lg-6 display-2">
        {{ $auth->nickname }}
      </div>
      <div class="col-sm-3">エピソードを追加する</div>
      <div class="col-sm-3">共有する</div>
    </div>
  </div>
@endsection