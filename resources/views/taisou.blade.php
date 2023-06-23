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

            <div class="container">
            </div>

            <div class="container layout-base">

                <div class="section">
                    <div class="section-header">
                        <h1 class="title is-2">コスゲリアン体操</h1>
                        <p>Amazon Echoで利用できるスキル（スマートフォンでいうアプリに相当します）を開発し、公開しています。</p>
                        <p>Amazon Echoシリーズをお持ちの方であれば、どなたでも利用できます。</p>
                        <p class="attention-link"><a href="https://www.amazon.co.jp/tatsuyakosuge-%E3%82%B3%E3%82%B9%E3%82%B2%E3%83%AA%E3%82%A2%E3%83%B3%E4%BD%93%E6%93%8D/dp/B07KF9KSPG" target="_blank">コスゲリアン体操（Amazon Echoスキルストアより）</a></p>

                        <div class="video">
                            <iframe class="video-inner" width="560" height="315" src="https://www.youtube.com/embed/GnAg47GSveo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>

                    </div>
                    <div class="section-body">
                        <div class="content">
                            <h2 class="title is-3">コスゲリアン体操とは？</h2>
                            <p>コスゲリアン体操では、日々の健康維持のために効果的な体操を提供しています。<br>Amazon Echo版では、音声のみで体操指示を行うことができるため、寝る前などに手軽に体操を行うことが可能です。</p>
                            <p class="">
                                コスゲリアン体操についての詳細は、管理人のブログ記事にある <br><a href="https://arrown-blog.com/kosugerian-taisou/" target="_blank">アレクサ（Alexa）スキル「コスゲリアン体操」をリリース！（Amazon Echo対応）そして今後の野望について</a><br> をご覧頂けますと幸いです。
                            </p>
                            <p><img src="{{asset('images/taisou.jpg')}}" alt="コスゲリアン体操のイラスト" width="400"></p>
                        </div>


                    </div>




                </div>

            </div>

        </main>
    </div>
    @include('layouts.footer')
</body>

</html>