<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="{{asset('/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/show.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/search.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/contact.css')}}">

    <title>yield('title')</title>

    <style>
    </style>
  </head>

  <body>
    <div class="wrap">
      <div class="header">
        @yield('header')
      </div>

      <div class="nav">
        @yield('nav')
      </div>

      <div class="contents">
        @yield('contents')
      </div>

      <div class="footer">
        @yield('footer')
      </div>
    </div>

    @yield('js')


  </body>
</html>
