@extends('layouts.app')

@section('title', 'Station')

<style>
.submit-form{
  text-align: center;
  padding-top: 100px;
}
.submit{
  width: 200px;
  height: 40px;
  line-height: 40px;
  border: solid 1px #FFFFFF;
  text-decoration: none;
  font-size: 16px;
  color: #FFFFFF;
  background: #068BF1;
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
<div class="search-info">
  <div class="search-info__title">
    <h2>最寄駅から探す</h2>
  </div>
  <div class="search-info__content">
    <form class="" action="/tkestate/station" method="get">
      <ul>
        <li>
          <input type="checkbox" name="station[]" id="station[0]" value="渋谷">
          <label for="station[0]">渋谷</label>
        </li>
        <li>
          <input type="checkbox" name="station[]" id="station[1]" value="原宿">
          <label for="station[1]">原宿</label>
        </li>
        <li>
          <input type="checkbox" name="station[]" id="station[2]" value="代々木">
          <label for="station[2]">代々木</label>
        </li>
        <li>
          <input type="checkbox" name="station[]" id="station[3]" value="表参道">
          <label for="station[3]">表参道</label>
        </li>
        <li>
          <input type="checkbox" name="station[]" id="station[4]" value="乃木坂">
          <label for="station[4]">乃木坂</label>
        </li>
        <li>
          <input type="checkbox" name="station[]" id="station[5]" value="広尾">
          <label for="station[5]">広尾</label>
        </li>
      </ul>
      <div class="submit-form"><input type="submit" value="この条件で検索する" class="submit"></div>
    </form>
  </div>
</div>
@endsection

@section('footer')
copyright 2020 TkEstate.
@endsection
