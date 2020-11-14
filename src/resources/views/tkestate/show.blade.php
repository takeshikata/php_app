@extends('layouts.app')

@section('title', 'Property')

<style>
.property-info{padding: 20px 0;}
.property-info__name{padding-bottom: 20px;}
.property-info__discribe{padding-bottom: 20px;}
.property-table{width: 100%;}
.property-images__sub{display: flex;justify-content: space-around;text-align: center;}
.property-images__sub-list a{width: 20%}
#main{width: 80%;margin: 0 auto;}
img.thumbnail:hover{
  cursor: pointer;
  opacity: 0.3;
}
</style>
@section('header')
  @component('components.header')
  @endcomponent
@endsection

@section('nav')
  @component('components.nav')
  @endcomponent
@endsection

@section('contents')
<div class="contents-wrap">
  <div class="property-info">
    <div class="property-info__name">
      <h2>{{$property->name}}</h2>
    </div>
    <div class="property-info__discribe">
      {{$property->discribe}}
    </div>
    <div class="property-info__detail">
      <table class="property-table">
        <tbody>
          <tr>
            <th>価格</th>
            <td>{{$property->price."万"}}</td>
            <th>最寄駅</th>
            <td colspan="3">{{$property->station}}</td>
          </tr>
          <tr>
            <th>築年数</th>
            <td>{{$property->old."年"}}</td>
            <th>備考</th>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <div class="property-images">
    <div class="property-images__main">
      <img src="{{$images->first()->image}}" id="main" alt="メイン">
    </div>

    <div class="property-images__sub">
      <div class="property-images__sub-list">
        @foreach($images as $image)
          <img src="{{$image->image}}" data-image="{{$image->image}}" class="thumbnail" alt="サムネイル" width="200">
        @endforeach
      </div>
    </div>
  </div>
</div>
@endsection

@section('footer')
copyright 2020 TkEstate.
@endsection

<script>
window.addEventListener("load", function() {
  let thumbnails = document.getElementsByClassName("thumbnail");
  thumbnailsAry = Array.prototype.slice.call(thumbnails);

  function thumbnailSwitch() {
    let image = this.getAttribute("data-image");

    document.getElementById("main").setAttribute("src", image);
  }
  thumbnailsAry.forEach(function(value){
    value.addEventListener("click", thumbnailSwitch);
  });
});
</script>
