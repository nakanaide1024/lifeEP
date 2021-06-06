@extends('top')
@section('content')
<div class="container" style="margin-top: 3%;">
  <div class="row">
    <div class="col-2"></div>
    <div class="col-8">
        <h2>エピソード編集フォーム</h2>
        <form method="POST" action="{{ route('update') }}" onSubmit="return checkSubmit()">
          @csrf
            <div class="form-group">
                <label for="title">
                    タイトル
                </label>
                <input
                    id="title"
                    name="title"
                    class="form-control"
                    value="{{ $episode->title }}"
                    type="text"
                >
                @if ($errors->has('title'))
                    <div class="text-danger">
                        {{ $errors->first('title') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="remarks">
                    備考欄
                </label>
                <textarea
                    id="remarks"
                    name="remarks"
                    class="form-control"
                    placeholder="話の内容のメモや、話す時に気をつけること等"
                    rows="4"
                >{{ $episode->remarks }}</textarea>
                @if ($errors->has('remarks'))
                    <div class="text-danger">
                        {{ $errors->first('remarks') }}
                    </div>
                @endif
            </div>
            <p>カテゴリー</p>
            <select class="form-select" aria-label="Default select example" name="category" id="category">
              @for($i = 0; $i < 4; $i++)
              @if($i == $episode->category)
              <option value="{{$i}}" selected>{{$category[$i]}}</option>
              @else
              <option value="{{$i}}">{{$category[$i]}}</option>
              @endif
              @endfor
            </select>
            <input type="hidden" name="user_id" value="{{$auth->id}}">
            <input type="hidden" name="id" value="{{$episode->id}}">
            <div class="mt-5">
                <a class="btn btn-secondary" href="/mypage/{{ Auth::user()->id }}">
                    キャンセル
                </a>
                <button type="submit" class="btn btn-primary">
                    編集する
                </button>
            </div>
        </form>
    </div>
    <div class="col-2"></div>
  </div>
</div>
<footer class="footer bg-info fixed-bottom">
@include('footer')
</footer>
<script>
function checkSubmit(){
  if(window.confirm('更新してよろしいですか？')){
    return true;
  } else {
    return false;
  }
}
</script>
@endsection