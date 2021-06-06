@extends('top')
@section('content')
<div class="container" style="margin-top: 3%;">
  <div class="row">
    <div class="col-2"></div>
    <div class="col-8">
        <h2>エピソード投稿フォーム</h2>
        <form method="POST" action="{{ route('create') }}" onSubmit="return checkSubmit()">
          @csrf
            <div class="form-group">
                <label for="title">
                    タイトル
                </label>
                <input
                    id="title"
                    name="title"
                    class="form-control"
                    value="{{ old('title') }}"
                    placeholder="エピソードのタイトル"
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
                >{{ old('remarks') }}</textarea>
                @if ($errors->has('remarks'))
                    <div class="text-danger">
                        {{ $errors->first('remarks') }}
                    </div>
                @endif
            </div>
            <p>カテゴリー</p>
            <select class="form-select" aria-label="Default select example" name="category" id="category">
              <option value="0">仕事</option>
              <option value="1">恋愛</option>
              <option value="2">趣味</option>
              <option value="3">日常</option>
            </select>
            <input type="hidden" name="user_id" value="{{$auth->id}}">
            <div class="mt-5">
                <a class="btn btn-secondary" href="/mypage/{{ Auth::user()->id }}">
                    キャンセル
                </a>
                <button type="submit" class="btn btn-primary">
                    投稿する
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
  if(window.confirm('送信してよろしいですか？')){
    return true;
  } else {
    return false;
  }
}
</script>
@endsection