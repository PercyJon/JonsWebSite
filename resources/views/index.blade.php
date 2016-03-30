{{-- 继承layouts里面的master.blade.php文件 --}}
@extends('layouts.master')

{{-- 继承master.blade.php总模板的title属性的@yield('title')指令, 并在后面添加自定义子标题 --}}
@section('title','首页')




@section('content')

    {{--站点总id : websiteContent --}}
    <div id="site">
        <div id="header">

            <div class="shadow"></div>
                <div class="glitch" data-text="Jón's WebSite">Jón's WebSite</div>

        </div>
        <div id="articles">文章列表DIV</div>
        <div id="quotation">每日语录DIV</div>
    </div>


@endsection