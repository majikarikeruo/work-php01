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

                <div class="text-center my-8">
                    <ul class="flex justify-center gap-4">
                        <li class="banner-item"><a href="https://store.line.me/stickershop/product/1450874/ja" target="_blank"><img src="https://kosugelian.net/images/banner.png" alt="LINEスタンプ・コスゲの日常発売中"></a></li>
                        <li class="banner-item"><a href="{{url('taisou')}}" target="_blank"><img src="https://kosugelian.net/images/banner2.png" alt="LINEスタンプ・コスゲの日常発売中"></a></li>
                    </ul>
                </div>
                <div class="py-20">
                    <h2 class="text-center font-bold text-2xl mb-4">Illustration <span class="block mt-2 text-sm text-gray-400">素材イラスト一覧</span></h2>
                    <p class="text-sm text-center">スマートフォンをお使いの場合は、画像を長押しするなどして<br>
                        「イメージを保存（iPhoneの場合）」などをご選択の上、<br>
                        素材をダウンロードいただいて問題ありません。</p>

                    <div class="grid grid-cols-3 gap-4 gap-y-8 mt-8 max-w-6xl mx-auto justify-center">
                        @foreach ($stamps as $stamp)
                        <article class="text-center">
                            <figure class="flex justify-center">
                                <img src="{{asset('storage/'.$stamp->image_url)}}" id="preview" width="240" alt="">
                            </figure>
                            <h2 class="text-[#3490dc] font-bold mt-2 mb-4 ">{{$stamp->title}}</h2>
                            <form action="{{url('download')}}" method="POST" enctype="multipart/form-data" class="flex justify-center">
                                {{ csrf_field() }}
                                <input type="hidden" value="{{$stamp->image_url}}" name="filename">
                                <button class="flex justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="24" height="24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                                    </svg>
                                    <span>素材ダウンロード</span></button>
                            </form>

                        </article>
                        @endforeach
                    </div>
                </div>
            </div>
        </main>
    </div>
    @include('layouts.footer')
</body>

</html>