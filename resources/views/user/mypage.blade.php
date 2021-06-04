@extends('top')
@section('content')
  <div class="container" style="margin-top: 3%;">
    <div class="row border-bottom align-items-end">
      <div class="col-lg-6 display-2">
        {{ $auth->nickname }}
      </div>
      <div class="col-lg-3" style="line-height: 4rem;">エピソードを追加する</div>
      <div class="col-lg-3" style="line-height: 4rem;">共有する</div>
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
                <div class="col-lg-4 accordion" id="accordionExample" style="margin-top: 5px;">
                  <div class="card">
                    <div class="card-header" id="headingOne">
                      <h5 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#work-id" aria-expanded="true" aria-controls="collapseOne">
                          タイトル
                        </button>
                      </h5>
                    </div>
                    <div id="work-id" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                      <div class="card-body">
                        <h5 class="card-title">備考欄</h5>
                        <p class="card-text">キーワード、話す時のコツ</p>
                        <a href="#" class="btn btn-primary">編集する</a>
                        <a href="#" class="btn btn-primary">削除する</a>
                      </div>
                    </div>
                  </div>
                </div>
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
                <div class="col-lg-4 accordion" id="accordionExample" style="margin-top: 5px;">
                  <div class="card">
                    <div class="card-header" id="headingOne">
                      <h5 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#love-id" aria-expanded="true" aria-controls="collapseOne">
                          タイトル
                        </button>
                      </h5>
                    </div>
                    <div id="love-id" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                      <div class="card-body">
                        <h5 class="card-title">備考欄</h5>
                        <p class="card-text">キーワード、話す時のコツ</p>
                        <a href="#" class="btn btn-primary">編集する</a>
                        <a href="#" class="btn btn-primary">削除する</a>
                      </div>
                    </div>
                  </div>
                </div>
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
                <div class="col-lg-4 accordion" id="accordionExample" style="margin-top: 5px;">
                  <div class="card">
                    <div class="card-header" id="headingOne">
                      <h5 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#hobby-id" aria-expanded="true" aria-controls="collapseOne">
                          タイトル
                        </button>
                      </h5>
                    </div>
                    <div id="hobby-id" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                      <div class="card-body">
                        <h5 class="card-title">備考欄</h5>
                        <p class="card-text">キーワード、話す時のコツ</p>
                        <a href="#" class="btn btn-primary">編集する</a>
                        <a href="#" class="btn btn-primary">削除する</a>
                      </div>
                    </div>
                  </div>
                </div>
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
                <div class="col-lg-4 accordion" id="accordionExample" style="margin-top: 5px;">
                  <div class="card">
                    <div class="card-header" id="headingOne">
                      <h5 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#day-id" aria-expanded="true" aria-controls="collapseOne">
                          タイトル
                        </button>
                      </h5>
                    </div>
                    <div id="day-id" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                      <div class="card-body">
                        <h5 class="card-title">備考欄</h5>
                        <p class="card-text">キーワード、話す時のコツ</p>
                        <a href="#" class="btn btn-primary">編集する</a>
                        <a href="#" class="btn btn-primary">削除する</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div> 
            </div>
          </div>
        </div>
      </div>
      <div class="col-1"></div>
    </div>
  </div>
@include('footer')
@endsection