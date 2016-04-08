{{-- 继承layouts里面的master.blade.php文件 --}}
@extends('layouts.master')

{{-- 继承master.blade.php总模板的title属性的@yield('title')指令, 并在后面添加自定义子标题 --}}
@section('title','文章详情')


@section('content')


<div class="container">

    <h2>{{ $post->title }}</h2>
    <h5>{{ $post->published_at }}</h5>
    <hr>
    {!! nl2br(e($post->content)) !!}
    <hr>
    <button class="btn btn-primary" onclick="history.go(-1)">
        << 返回
    </button>

</div>