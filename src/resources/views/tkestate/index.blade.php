@extends('layouts.app')

@section('title', 'TkEstate')

@section('header')
    @component('components.header')
    @endcomponent
@endsection

@section('nav')
    @component('components.nav')
    @endcomponent
@endsection

@section('contents')
  {{-- @componentを使う際、必ず変数を@slotで定義しないとエラーになる
      または、@include('components.main', ['image' => $image]) でも可 --}}
    @include('components.main', ['properties' => $properties_and_images])
  {{-- @component('components.main')
    @slot('images')
    {{$property_images}}
    @endslot
    @endcomponent --}}

@endsection

@section('footer')
copyright 2020 TkEstate.
@endsection

@section('js')


@endsection

{{-- Railsと違い一タブあけだと、ビューが崩れる --}}
