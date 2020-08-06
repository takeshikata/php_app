@extends('layouts.app')

@section('title', 'Price')

<style>
/* flash_message */
.flash_message{
  background-color: #412d1c;
  color: #ffffff;
  text-align: center;
  margin-top: 20px;
}
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
    <h2>価格から探す</h2>
  </div>
  <div class="search-info__content">
    <form class="" action="/tkestate/price" method="get">
      <ul>
        <li style="width:33%;">
          <input type="checkbox" name="price_number[]" id="price_number[1]" value="1">
          <label for="price_number[1]">1000万以下</label>
        </li>
        <li style="width:33%;">
          <input type="checkbox" name="price_number[]" id="price_number[2]" value="2">
          <label for="price_number[2]">1000万〜3000万 </label>
        </li>
        <li style="width:33%;">
          <input type="checkbox" name="price_number[]" id="price_number[3]" value="3">
          <label for="price_number[3]">3000万〜5000万</label>
        </li>
        <li style="width:33%;">
          <input type="checkbox" name="price_number[]" id="price_number[4]" value="4">
          <label for="price_number[4]">5000万〜7000万</label>
        </li>
        <li style="width:33%;">
          <input type="checkbox" name="price_number[]" id="price_number[5]" value="5">
          <label for="price_number[5]">7000万〜9000万</label>
        </li>
        <li style="width:33%;">
          <input type="checkbox" name="price_number[]" id="price_number[6]" value="6">
          <label for="price_number[6]">9000万以上</label>
        </li>
      </ul>
      <div class="submit-form"><input type="submit" value="この条件で検索する" class="submit"></div>
    </form>
    @if (session('message'))
      <div class="flash_message">
        {{ session('message') }}
      </div>
    @endif
  </div>

</div>
@endsection

@section('footer')
copyright 2020 TkEstate.
@endsection
