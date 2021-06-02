@extends('top')
@section('content')
<form action="">
  <div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">ニックネーム</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="１０文字以内で入力してください">
  </div>
  <div class="mb-3">
    <label for="formGroupExampleInput2" class="form-label">メールアドレス</label>
    <input type="email" class="form-control" id="formGroupExampleInput2" placeholder="メールアドレスを入力して下さい">
  </div>
  <div class="mb-3">
    <label for="formGroupExampleInput2" class="form-label">パスワード</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="パスワードを入力して下さい">
  </div>
  <div class="mb-3">
    <label for="formGroupExampleInput2" class="form-label">パスワード確認</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="確認のためパスワードをもう一度入力して下さい">
  </div>
  <div class="col-12">
      <button type="submit" class="btn btn-primary">Sign in</button>
  </div>
</form>
@endsection