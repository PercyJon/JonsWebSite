{{-- 继承layouts里面的master.blade.php文件 --}}
@extends('layouts.master')

{{-- 继承master.blade.php总模板的title属性的@yield('title')指令, 并在后面添加自定义子标题 --}}
@section('title','关于我')




@section('content')

<h1>about page</h1>

@endsection