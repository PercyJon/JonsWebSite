{{-- 继承layouts里面的master.blade.php文件 --}}
@extends('layouts.master')

{{-- 继承master.blade.php总模板的title属性的@yield('title')指令, 并在后面添加自定义子标题 --}}
@section('title','文章')


@section('content')

<div class="container">
    <h2>{{ config('blog.title') }}</h2>
    <h5>Page {{ $posts->currentPage() }} of {{ $posts->lastPage() }}</h5>
    <hr>
    <ul>
        @foreach($posts as $post)
            <li>
                <a href="/blog/{{ $post->slug }}">{{ $post->title }}</a>
                <em>({{ $post->published_at }})</em>
                <p>
                    {{ str_limit($post->content) }}
                </p>
            </li>
        @endforeach    
    </ul>
    <hr>
    {!! $posts->render() !!}
</div>

@endsection