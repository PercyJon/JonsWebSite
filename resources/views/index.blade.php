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
            <div class="cloud-svg">
                <svg class="" xmlns="http://www.w3.org/2000/svg" version="1.1" fill="#fff" width="100%" height="80" viewBox="0 0 2.23333 0.1" preserveAspectRatio="none" style="height: 80px;"><path class="fil0" d="M2.23281 0.0372047c0,0 -0.0261929,-0.000389764 -0.0423307,-0.00584252 0,0 -0.0356181,0.0278268 -0.0865354,0.0212205 0,0 -0.0347835,-0.00524803 -0.0579094,-0.0283701 0,0 -0.0334252,0.0112677 -0.0773425,-0.00116929 0,0 -0.0590787,0.0524724 -0.141472,0.000779528 0,0 -0.0288189,0.0189291 -0.0762362,0.0111535 -0.00458268,0.0141024 -0.0150945,0.040122 -0.0656811,0.0432598 -0.0505866,0.0031378 -0.076126,-0.0226614 -0.0808425,-0.0308228 -0.00806299,0.000854331 -0.0819961,0.0186969 -0.111488,-0.022815 -0.0076378,0.0114843 -0.059185,0.0252598 -0.083563,-0.000385827 -0.0295945,0.0508661 -0.111996,0.0664843 -0.153752,0.019 -0.0179843,0.00227559 -0.0571181,0.00573622 -0.0732795,-0.0152953 -0.027748,0.0419646 -0.110602,0.0366654 -0.138701,0.00688189 0,0 -0.0771732,0.0395709 -0.116598,-0.0147677 0,0 -0.0497598,0.02 -0.0773346,-0.00166929 0,0 -0.0479646,0.0302756 -0.0998937,0.00944094 0,0 -0.0252638,0.0107874 -0.0839488,0.00884646 0,0 -0.046252,0.000775591 -0.0734567,-0.0237087 0,0 -0.046252,0.0101024 -0.0769567,-0.00116929 0,0 -0.0450827,0.0314843 -0.118543,0.0108858 0,0 -0.0715118,0.0609803 -0.144579,0.00423228 0,0 -0.0385787,0.00770079 -0.0646299,0.000102362 0,0 -0.0387559,0.0432205 -0.125039,0.0206811 0,0 -0.0324409,0.0181024 -0.0621457,0.0111063l-3.93701e-005 0.0412205 2.2323 0 0 -0.0627953z"></path></svg>
            </div>
        </div>
        <div id="articles">



            <div class="container">
                <div class="col-sm-12">
                    <div class="articles-header">
                        <h2>文章列表</h2>
                    </div>

                    <div class="articles-block">
                    <div class="media">
                        {{--<div class="media-left media-middle">--}}
                            {{--<a href="#">--}}
                                {{--<img class="media-object" src="..." alt="...">--}}
                            {{--</a>--}}
                        {{--</div>--}}
                        <div class="media-body">
                            <a href="javascript:;">
                            <h4 class="media-heading">Glyphicons 字体图标</h4>
                                <div class="labels">
                                    <a href=""><span class="label label-success">标签</span></a>
                                    <a href=""><span class="label label-success">标签</span></a>
                                </div>
                            <span>包括250多个来自 Glyphicon Halflings 的字体图标。Glyphicons Halflings 一般是收费的，但是他们的作者允许 Bootstrap 免费使用。为了表示感谢，希望你在使用时尽量为 Glyphicons 添加一个友情链接。</span>
                            </a>
                        </div>
                    </div>

                        <div class="media">
                            {{--<div class="media-left media-middle">--}}
                            {{--<a href="#">--}}
                            {{--<img class="media-object" src="..." alt="...">--}}
                            {{--</a>--}}
                            {{--</div>--}}
                            <div class="media-body">
                                <a href="javascript:;">
                                    <h4 class="media-heading">Glyphicons 字体图标</h4>
                                    <div class="labels">
                                        <a href=""><span class="label label-success">标签</span></a>
                                        <a href=""><span class="label label-success">标签</span></a>
                                    </div>
                                    <span>包括250多个来自 Glyphicon Halflings 的字体图标。Glyphicons Halflings 一般是收费的，但是他们的作者允许 Bootstrap 免费使用。为了表示感谢，希望你在使用时尽量为 Glyphicons 添加一个友情链接。</span>
                                </a>
                            </div>
                        </div>

                        <div class="media">
                            {{--<div class="media-left media-middle">--}}
                            {{--<a href="#">--}}
                            {{--<img class="media-object" src="..." alt="...">--}}
                            {{--</a>--}}
                            {{--</div>--}}
                            <div class="media-body">
                                <a href="javascript:;">
                                    <h4 class="media-heading">Glyphicons 字体图标</h4>
                                    <div class="labels">
                                        <a href=""><span class="label label-success">标签</span></a>
                                        <a href=""><span class="label label-success">标签</span></a>
                                    </div>
                                    <span>包括250多个来自 Glyphicon Halflings 的字体图标。Glyphicons Halflings 一般是收费的，但是他们的作者允许 Bootstrap 免费使用。为了表示感谢，希望你在使用时尽量为 Glyphicons 添加一个友情链接。</span>
                                </a>
                            </div>
                        </div>

                        <div class="media">
                            {{--<div class="media-left media-middle">--}}
                            {{--<a href="#">--}}
                            {{--<img class="media-object" src="..." alt="...">--}}
                            {{--</a>--}}
                            {{--</div>--}}
                            <div class="media-body">
                                <a href="javascript:;">
                                    <h4 class="media-heading">Glyphicons 字体图标</h4>
                                    <div class="labels">
                                        <a href=""><span class="label label-success">标签</span></a>
                                        <a href=""><span class="label label-success">标签</span></a>
                                    </div>
                                    <span>包括250多个来自 Glyphicon Halflings 的字体图标。Glyphicons Halflings 一般是收费的，但是他们的作者允许 Bootstrap 免费使用。为了表示感谢，希望你在使用时尽量为 Glyphicons 添加一个友情链接。</span>
                                </a>
                            </div>
                        </div>

                        <div class="media">
                            {{--<div class="media-left media-middle">--}}
                            {{--<a href="#">--}}
                            {{--<img class="media-object" src="..." alt="...">--}}
                            {{--</a>--}}
                            {{--</div>--}}
                            <div class="media-body">
                                <a href="javascript:;">
                                    <h4 class="media-heading">Glyphicons 字体图标</h4>
                                    <div class="labels">
                                        <a href=""><span class="label label-success">标签</span></a>
                                        <a href=""><span class="label label-success">标签</span></a>
                                    </div>
                                    <span>包括250多个来自 Glyphicon Halflings 的字体图标。Glyphicons Halflings 一般是收费的，但是他们的作者允许 Bootstrap 免费使用。为了表示感谢，希望你在使用时尽量为 Glyphicons 添加一个友情链接。</span>
                                </a>
                            </div>
                        </div>

                        <div class="media">
                            {{--<div class="media-left media-middle">--}}
                            {{--<a href="#">--}}
                            {{--<img class="media-object" src="..." alt="...">--}}
                            {{--</a>--}}
                            {{--</div>--}}
                            <div class="media-body">
                                <a href="javascript:;">
                                    <h4 class="media-heading">Glyphicons 字体图标</h4>
                                    <div class="labels">
                                        <a href=""><span class="label label-success">标签</span></a>
                                        <a href=""><span class="label label-success">标签</span></a>
                                    </div>
                                    <span>包括250多个来自 Glyphicon Halflings 的字体图标。Glyphicons Halflings 一般是收费的，但是他们的作者允许 Bootstrap 免费使用。为了表示感谢，希望你在使用时尽量为 Glyphicons 添加一个友情链接。</span>
                                </a>
                            </div>
                        </div>

                        <div class="media">
                            {{--<div class="media-left media-middle">--}}
                            {{--<a href="#">--}}
                            {{--<img class="media-object" src="..." alt="...">--}}
                            {{--</a>--}}
                            {{--</div>--}}
                            <div class="media-body">
                                <a href="javascript:;">
                                    <h4 class="media-heading">Glyphicons 字体图标</h4>
                                    <div class="labels">
                                        <a href=""><span class="label label-success">标签</span></a>
                                        <a href=""><span class="label label-success">标签</span></a>
                                    </div>
                                    <span>包括250多个来自 Glyphicon Halflings 的字体图标。Glyphicons Halflings 一般是收费的，但是他们的作者允许 Bootstrap 免费使用。为了表示感谢，希望你在使用时尽量为 Glyphicons 添加一个友情链接。</span>
                                </a>
                            </div>
                        </div>

                        <div class="media">
                            {{--<div class="media-left media-middle">--}}
                            {{--<a href="#">--}}
                            {{--<img class="media-object" src="..." alt="...">--}}
                            {{--</a>--}}
                            {{--</div>--}}
                            <div class="media-body">
                                <a href="javascript:;">
                                    <h4 class="media-heading">Glyphicons 字体图标</h4>
                                    <div class="labels">
                                        <a href=""><span class="label label-success">标签</span></a>
                                        <a href=""><span class="label label-success">标签</span></a>
                                    </div>
                                    <span>包括250多个来自 Glyphicon Halflings 的字体图标。Glyphicons Halflings 一般是收费的，但是他们的作者允许 Bootstrap 免费使用。为了表示感谢，希望你在使用时尽量为 Glyphicons 添加一个友情链接。</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div id="quotation">每日语录DIV</div>
    </div>


@endsection