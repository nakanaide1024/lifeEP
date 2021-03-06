@extends('top')
@section('content')
  <div class="container" style="margin-top: 3%;">
    <div class="row border-bottom align-items-end">
      <div class="col-lg-6 display-2">
        {{ $auth->nickname }}
      </div>
      <div class="col-lg-3" style="line-height: 4rem;">
        @if(Auth::check() && Auth::user()->id == $auth->id)
        <a href="{{route('new')}}">エピソードを追加する</a>
        @else
        閲覧用ページ
        @endif
      </div>
      <div class="col-lg-3" style="line-height: 4rem;"><a href="" onclick="copy()">共有する</a></div>
    </div>
    <div class="row" style="line-height: 4rem; margin-top: 2rem;">
      <div class="col-4"></div>
      <div class="col-4 border-bottom text-center align-bottom">category</div>
      <div class="col-4"></div>
    </div>
    <div class="row" style="margin-top: 15px;">
      <div class="col-1"></div>
      <div class="col-10 accordion" id="accordionPanelsStayOpenExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="panelsStayOpen-headingOne">
            <button class="accordion-button" type="button" data-toggle="collapse" data-target="#panelsStayOpen-collapseOne" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
              <h3>仕事</h3>
            </button>
          </h2>
          <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
            <div class="accordion-body">
              <div class="row">
                @foreach($episodes as $episode)
                @if($episode->category == 0 && $episode->user_id == $id)
                <div class="col-lg-4 accordion" id="accordionExample" style="margin-top: 5px;">
                  <div class="card">
                    <div class="card-header" id="headingOne">
                      <h5 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#work-{{$episode->id}}" aria-expanded="true" aria-controls="collapseOne">
                          {{$episode->title}}
                        </button>
                      </h5>
                    </div>
                    @if(Auth::check() && Auth::user()->id == $episode->user_id)
                    <div id="work-{{$episode->id}}" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                      <div class="card-body">
                        <h5 class="card-title">備考欄</h5>
                        <p class="card-text">{{$episode->remarks}}</p>
                        <a href="/edit/{{$episode->id}}" class="btn btn-primary">編集する</a>
                        <a class="btn btn-primary"
                          onclick="event.preventDefault()
                          document.getElementById('delete-work-{{$episode->id}}').submit();">
                            削除する
                        </a>
                        <form id="delete-work-{{$episode->id}}" method="POST" action="{{ route('delete', $episode->id) }}">
                        @csrf
                        </form>
                      </div>
                    </div>
                    @endif
                  </div>
                </div>
                @endif
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-1"></div>
    </div>
    <div class="row" style="margin-top: 15px;">
      <div class="col-1"></div>
      <div class="col-10 accordion" id="accordionPanelsStayOpenExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
            <button class="accordion-button" type="button" data-toggle="collapse" data-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
              <h3>恋愛</h3>
            </button>
          </h2>
          <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
            <div class="accordion-body">
              <div class="row">
                @foreach($episodes as $episode)
                @if($episode->category == 1 && $episode->user_id == $id)
                <div class="col-lg-4 accordion" id="accordionExample" style="margin-top: 5px;">
                  <div class="card">
                    <div class="card-header" id="headingOne">
                      <h5 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#love-{{$episode->id}}" aria-expanded="true" aria-controls="collapseOne">
                        {{$episode->title}}
                        </button>
                      </h5>
                    </div>
                    @if(Auth::check() && Auth::user()->id == $episode->user_id)
                    <div id="love-{{$episode->id}}" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                      <div class="card-body">
                        <h5 class="card-title">備考欄</h5>
                        <p class="card-text">{{$episode->remarks}}</p>
                        <a href="/edit/{{$episode->id}}" class="btn btn-primary">編集する</a>
                        <a class="btn btn-primary"
                          onclick="event.preventDefault()
                          document.getElementById('delete-love-{{$episode->id}}').submit();">
                            削除する
                        </a>
                        <form id="delete-love-{{$episode->id}}" method="POST" action="{{ route('delete', $episode->id) }}">
                        @csrf
                        </form>
                      </div>
                    </div>
                    @endif
                  </div>
                </div>
                @endif
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-1"></div>
    </div>
    <div class="row" style="margin-top: 15px;">
      <div class="col-1"></div>
      <div class="col-10 accordion" id="accordionPanelsStayOpenExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="panelsStayOpen-headingThree">
            <button class="accordion-button" type="button" data-toggle="collapse" data-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
              <h3>趣味</h3>
            </button>
          </h2>
          <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
            <div class="accordion-body">
              <div class="row">
                @foreach($episodes as $episode)
                @if($episode->category == 2 && $episode->user_id == $id)
                <div class="col-lg-4 accordion" id="accordionExample" style="margin-top: 5px;">
                  <div class="card">
                    <div class="card-header" id="headingOne">
                      <h5 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#hobby-{{$episode->id}}" aria-expanded="true" aria-controls="collapseOne">
                        {{$episode->title}}
                        </button>
                      </h5>
                    </div>
                    @if(Auth::check() && Auth::user()->id == $episode->user_id)
                    <div id="hobby-{{$episode->id}}" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                      <div class="card-body">
                        <h5 class="card-title">備考欄</h5>
                        <p class="card-text">{{$episode->remarks}}</p>
                        <a href="/edit/{{$episode->id}}" class="btn btn-primary">編集する</a>
                        <a class="btn btn-primary"
                          onclick="event.preventDefault()
                          document.getElementById('delete-hobby-{{$episode->id}}').submit();">
                            削除する
                        </a>
                        <form id="delete-hobby-{{$episode->id}}" method="POST" action="{{ route('delete', $episode->id) }}">
                        @csrf
                        </form>
                      </div>
                    </div>
                    @endif
                  </div>
                </div>
                @endif
                @endforeach
              </div> 
            </div>
          </div>
        </div>
      </div>
      <div class="col-1"></div>
    </div>
    <div class="row" style="margin-top: 15px;">
      <div class="col-1"></div>
      <div class="col-10 accordion" id="accordionPanelsStayOpenExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="panelsStayOpen-headingFour">
            <button class="accordion-button" type="button" data-toggle="collapse" data-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
              <h3>日常</h3>
            </button>
          </h2>
          <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour">
            <div class="accordion-body">
              <div class="row">
                @foreach($episodes as $episode)
                @if($episode->category == 3 && $episode->user_id == $id)
                <div class="col-lg-4 accordion" id="accordionExample" style="margin-top: 5px;">
                  <div class="card">
                    <div class="card-header" id="headingOne">
                      <h5 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#day-{{$episode->id}}" aria-expanded="true" aria-controls="collapseOne">
                        {{$episode->title}}
                        </button>
                      </h5>
                    </div>
                    @if(Auth::check() && Auth::user()->id == $episode->user_id)
                    <div id="day-{{$episode->id}}" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                      <div class="card-body">
                        <h5 class="card-title">備考欄</h5>
                        <p class="card-text">{{$episode->remarks}}</p>
                        <a href="/edit/{{$episode->id}}" class="btn btn-primary">編集する</a>
                        <a class="btn btn-primary"
                          onclick="event.preventDefault()
                          document.getElementById('delete-day-{{$episode->id}}').submit();">
                            削除する
                        </a>
                        <form id="delete-day-{{$episode->id}}" method="POST" action="{{ route('delete', $episode->id) }}">
                        @csrf
                        </form>
                      </div>
                    </div>
                    @endif
                  </div>
                </div>
                @endif
                @endforeach
              </div> 
            </div>
          </div>
        </div>
      </div>
      <div class="col-1"></div>
    </div>
  </div>
  <footer class="footer bg-info" style="margin-top: 8%;">
  @include('footer')
  </footer>
  <script>
  function copy(){
    event.preventDefault();
    $(document.body).append("<textarea id=\"copyTarget\" style=\"position:absolute; left:-9999px; top:0px;\" readonly=\"readonly\">" +location.href+ "</textarea>");
    let obj = document.getElementById("copyTarget");
    let range = document.createRange();
    range.selectNode(obj);
    window.getSelection().addRange(range);
    document.execCommand('copy');
    alert('コピーできました');
  }
  </script>
@endsection