<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Jon的藏书阁 - @yield('title')</title>

    <!-- Bootstrap -->
    <!-- <link href="../../assets/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="{{ URL::asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/main.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

  {{--@extends('common.header')--}}
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        {{--<a class="navbar-brand" href="#">Brand</a>--}}
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#" alt="mystore">藏书阁</a></li>
          <li><a href="#" alt="articles">文章列表</a></li>
          <li><a href="#" alt="about">关于我</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>


  @yield('content')



  <footer id="footer">
    <div class="container">
      <h1>这是脚 !</h1>
    </div>
  </footer>


    <script src="{{ URL::asset('assets/js/plugins/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/plugins/modernizr.js') }}"></script>
    <script src="{{ URL::asset('assets/js/plugins/classie.js') }}"></script>
    <script src="{{ URL::asset('assets/js/plugins/cbpAnimatedHeader.js') }}"></script>
    <script src="{{ URL::asset('assets/js/plugins/prefixfree.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/plugins/bootstrap.min.js') }}"></script>
  </body>
</html>