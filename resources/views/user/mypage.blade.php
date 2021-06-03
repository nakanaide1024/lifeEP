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
              <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
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
              <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
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
              <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
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
              <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
            </div>
          </div>
        </div>
      </div>
      <div class="col-1"></div>
    </div>
    <div class="row bg-info" style="margin-top: 20px;">
      <div class="col text-center">
        <span class="text-light">©︎上りだけ坂 2021</span>
      </div>
    </div>
  </div>
@endsection