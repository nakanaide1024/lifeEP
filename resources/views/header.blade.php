<nav class="navbar navbar-expand-lg navbar-dark bg-info">
  <a class="navbar-brand" href="/">LifeEP 〜人生のネタ帳〜</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      @if (!Auth::check())
      <a class="nav-item nav-link active" href="{{ route('login') }}">ログイン</a>
      <a class="nav-item nav-link active" href="{{ route('register') }}">新規登録</a>
      <a class="nav-item nav-link active" href="{{ route('guest') }}">ゲストログイン</a>
      @else
      <a class="nav-item nav-link active" href="{{ route('logout') }}"
        onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
            ログアウト
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
      </form>
      <a class="nav-item nav-link active" href="/mypage/{{ Auth::user()->id }}">マイページ</a>
      @endif
    </div>
  </div>
</nav>