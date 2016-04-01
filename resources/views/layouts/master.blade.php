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
    <div class="cloud-svg cloud">
      <svg class="" xmlns="http://www.w3.org/2000/svg" version="1.1" fill="#fff" width="100%" height="80" viewBox="0 0 2.23333 0.1" preserveAspectRatio="none" style="height: 80px;"><path class="fil0" d="M2.23281 0.0372047c0,0 -0.0261929,-0.000389764 -0.0423307,-0.00584252 0,0 -0.0356181,0.0278268 -0.0865354,0.0212205 0,0 -0.0347835,-0.00524803 -0.0579094,-0.0283701 0,0 -0.0334252,0.0112677 -0.0773425,-0.00116929 0,0 -0.0590787,0.0524724 -0.141472,0.000779528 0,0 -0.0288189,0.0189291 -0.0762362,0.0111535 -0.00458268,0.0141024 -0.0150945,0.040122 -0.0656811,0.0432598 -0.0505866,0.0031378 -0.076126,-0.0226614 -0.0808425,-0.0308228 -0.00806299,0.000854331 -0.0819961,0.0186969 -0.111488,-0.022815 -0.0076378,0.0114843 -0.059185,0.0252598 -0.083563,-0.000385827 -0.0295945,0.0508661 -0.111996,0.0664843 -0.153752,0.019 -0.0179843,0.00227559 -0.0571181,0.00573622 -0.0732795,-0.0152953 -0.027748,0.0419646 -0.110602,0.0366654 -0.138701,0.00688189 0,0 -0.0771732,0.0395709 -0.116598,-0.0147677 0,0 -0.0497598,0.02 -0.0773346,-0.00166929 0,0 -0.0479646,0.0302756 -0.0998937,0.00944094 0,0 -0.0252638,0.0107874 -0.0839488,0.00884646 0,0 -0.046252,0.000775591 -0.0734567,-0.0237087 0,0 -0.046252,0.0101024 -0.0769567,-0.00116929 0,0 -0.0450827,0.0314843 -0.118543,0.0108858 0,0 -0.0715118,0.0609803 -0.144579,0.00423228 0,0 -0.0385787,0.00770079 -0.0646299,0.000102362 0,0 -0.0387559,0.0432205 -0.125039,0.0206811 0,0 -0.0324409,0.0181024 -0.0621457,0.0111063l-3.93701e-005 0.0412205 2.2323 0 0 -0.0627953z"></path></svg>
    </div>
    <div class="container">
      <h1>这是脚 !</h1>
    </div>
  </footer>


    <script src="{{ URL::asset('assets/js/plugins/jquery.min.js') }}"></script>
    {{--<script src="{{ URL::asset('assets/js/plugins/jquery-ui.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/plugins/TweenMax.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/plugins/CSSPlugin.min.js') }}"></script>--}}
    <script src="{{ URL::asset('assets/js/plugins/main.js') }}"></script>
    <script src="{{ URL::asset('assets/js/plugins/modernizr.js') }}"></script>
    <script src="{{ URL::asset('assets/js/plugins/classie.js') }}"></script>
    <script src="{{ URL::asset('assets/js/plugins/cbpAnimatedHeader.js') }}"></script>
    <script src="{{ URL::asset('assets/js/plugins/prefixfree.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/plugins/bootstrap.min.js') }}"></script>
  </body>
</html>