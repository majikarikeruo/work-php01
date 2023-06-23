<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <link rel="apple-touch-icon" href="{{asset('touch-icon.png')}}">
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}">
    <meta name="description" content="コスゲリアン.comは、無料で楽しく利用できる素材サイトです。無料素材配布だけでなく、LINEスタンプ販売・コスゲリアン体操など様々なコンテンツを提供しています。">
    <meta property="og:title" content="@yield('title')">
    <meta property="og:description" content="コスゲリアン.comは、無料で楽しく利用できる素材サイトです。無料素材配布だけでなく、LINEスタンプ販売・コスゲリアン体操など様々なコンテンツを提供しています。">
    <meta property="og:image" content="{{asset('ogimage.png')}}">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:description" content="コスゲリアン.comは、無料で楽しく利用できる素材サイトです。無料素材配布だけでなく、LINEスタンプ販売・コスゲリアン体操など様々なコンテンツを提供しています。">
    <meta name="twitter:title" content="@yield('title')">
    <meta name="twitter:image" content="{{asset('ogimage.png')}}">
    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <div id="app">
        <header class="py-6">
            <div class="container">
                <h1 class="text-center text-[10px] mb-3">- コスゲリアン.com | 無料で楽しく利用できる素材サイト-</h1>
                <div class="flex justify-center">
                    <a href="{{ url('/') }}" class="flex">
                        <img src="https://kosugelian.net/images/stamp18.png" alt="" width="80">
                        <img src="https://kosugelian.net/images/logo.svg" alt="コスゲリアン" width="160" class="typo-logo">
                    </a>
                </div>
            </div>
        </header>
        <div class="bg-[#18c5ff]">
            <div class="container">
                <nav>
                    <ul class="flex justify-center gap-20">
                        <li class="level-item has-text-centered">
                            <a class="inline-block py-4 text-white" href="{{url('/about/')}}">コスゲリアンについて</a>
                        </li>
                        <li class="level-item has-text-centered">
                            <a class="inline-block py-4  text-white" href="{{url('/howtouse/')}}">素材の使い方・規約</a>
                        </li>

                        <li class="level-item has-text-centered">
                            <a class="inline-block py-4  text-white" href="{{ url('/taisou/') }}">コスゲリアン体操</a>
                        </li>
                        <li class="level-item has-text-centered">
                            <a href="{{url('/contact/')}}" class="inline-block py-4 text-white">お問い合わせ</a>
                        </li>
                    </ul>
                </nav>
            </div>

        </div>

        <main class="main">

            <div class="bg-[#222]">
                <div class="flex justify-center">
                    <iframe width="560" height="315" class="youtube--inner" src="https://www.youtube.com/embed/0JohOCnMjPg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>

            <div class="container">
            </div>


            <div class="container">

                <div class="section">
                    <div class="section-header">
                        <h1 class="title is-2">コスゲリアンについて</h1>
                        <p>本サイトは、<a href="https://store.line.me/stickershop/product/1450874/ja" target="_blank">LINEスタンプ・コスゲの日常</a>で展開したキャラクター「コスゲリアン」の更なる認知拡大を目指して制作されました。</p>
                        <p>本サイトにて配布されている素材は無料でご利用いただけます。利用規約などについては<a href="{{url('/howtouse/')}}"></a>をご一読いただき、<br>ルールの範囲内でぜひ楽しく素材を利用いただければと思います！</p>
                    </div>

                    <div class="section-body">

                        <div class="content">
                            <h2 class="title is-3">管理人</h2>
                            <p>管理人は、<a href="https://arrown-blog.com" target="_blank">Arrown</a>というブログを運営している <a href="https://twitter.com/keinkosuge/" target="_blank">@keinkosuge</a>です。<br>よろしければ、ぜひブログもご覧になってみてください。</p>
                        </div>

                        <div class="content">
                            <h2 class="title is-3">本サイトの運営方針</h2>
                            <p>本サイトは、2019年3月頃までは現行のサービス提供内容を維持していきますが、以降は方針・提供内容を変更する可能性があります。</p>
                            <p>規約についても、サービス内容変更の際には、抜本的に変わる可能性があります。</p>
                        </div>

                        <div class="content">
                            <h2 class="title is-3">寄付について</h2>
                            <p>本サイトの運営にはそれなりの経費がかかります。本サイトおよびコスゲリアンの発展を応援したい！と思ってくださった方は、<br><a href="https://store.line.me/stickershop/product/1450874/ja" target="_blank">LINEスタンプ・コスゲの日常</a>をご購入いただけますと大変幸いです。</p>



                        </div>

                    </div>




                </div>

            </div>
        </main>
    </div>
    @include('layouts.footer')
</body>

</html>