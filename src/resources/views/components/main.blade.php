<div class="contents-wrap">
  <div class="contents-info">
    <div class="clearfix">
      <div class="contents-info__left" style="width:40%;">
        <div class="contents-info__logo">
          <img src="tkestate.jpg" alt="logo" style="width:65%;">
        </div>
        <div class="contents-info__search">
          <form action="/tkestate" method="GET">
            <input type="text" name="keyword" value="" class="keyword" placeholder="キーワードを入力して下さい" style="width:60%;">
          </form>
        </div>
      </div>
      <div class="contents-info__right">
        <img src="tkestate_image.jpg" alt="tkestate_image" style="width:70%">
      </div>
    </div>
  </div>
  <div class="contents-recommend">
    <h2>RECOMMEND</h2>
    <div class="contents-recommend__houses">
      @foreach($properties as $v)
        @foreach($v as $sub_k => $sub_v)
          @if($loop->parent->index == 0)
            <div class="contents-recommend__house">
              <div class="contents-recommend__house-image">
                <a href="/tkestate/{{$sub_v->property_id}}">
                  <img src="{{$sub_v->image}}" alt="" width="150" height="150">
                </a>
              </div>
              <div class="contents-recommend__house-describe">
                {{$properties[1][$sub_k]->name}}
              </div>
            </div>
          @endif
        @endforeach
      @endforeach
    </div>
  </div>
</div>
