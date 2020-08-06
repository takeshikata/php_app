@extends('layouts.app')

@section('title', 'SearchResult')

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
  <div class="search-results">
    @if (session('message'))
      <div class="flash_message">
        {{ session('message') }}
      </div>
    @endif
    @foreach($results as $result)
      @foreach($result as $key => $value)
        @if($loop->parent->index == 0)
          <div class="search-result">
            <div class="search-result__image">
              <a href="/tkestate/{{$value->property_id}}">
                <img src="{{$value->image}}" alt="" width="150" height="150">
              </a>
            </div>
            <div class="search-result__discribe">
              {{$results[1][$key]->name}}
            </div>
          </div>
        @endif
      @endforeach
    @endforeach
  </div>
</div>
@endsection

@section('footer')
copyright 2020 TkEstate.
@endsection
