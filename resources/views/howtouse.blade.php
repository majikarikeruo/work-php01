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

            <div class="container">

                <div class="section">
                    <div class="section-header">
                        <h1 class="title is-2">素材の使い方と利用規約について</h1>
                        <p>コスゲリアン.comで配布されている素材の使い方と利用規約については、以下をご一読ください。</p>
                    </div>
                    <div class="section-body">
                        <div class="content">
                            <h2 class="title is-3">素材の利用条件</h2>
                            <ul>
                                <li class="">
                                    本サイトで配布されている素材についての著作権はコスゲリアン.comが保持します。<br>配布されている素材の使用に関しては、当サイトの規約やシステム、仕組みに変更があるまでは基本的に無料でご利用いただけます。
                                </li>
                                <li class="">
                                    Webデザインのパーツ・パワーポイントなどの資料・チラシ・フライヤーなどでご利用ください。（ロゴとしての利用はNGです）
                                </li>
                                <li class="">
                                    素材の利用に報告の義務はありませんが、面白かったり・有益な利用事例などあればご連絡いただけると <br>本サイトやその他SNSなどで本サイトとしても積極的に拡散・宣伝させていただきます。
                                </li>
                            </ul>
                        </div>

                        <div class="content">
                            <h2 class="title is-3">禁止事項</h2>
                            <ul>
                                <li>本サイトで配布されている素材を、そのまま転用したり改変したりして販売・再配布することを固く禁じます。</li>
                                <li>他社・他サービスでロゴとして使用し、商標登録することを固く禁じます。</li>
                                <li>ネットワーク又はシステム等に過度な負荷をかける行為を禁じます。</li>
                                <li>本サイトのロゴを直接リンクで利用する行為を禁じます（ダウンロードしてご利用ください）</li>
                                <li>本サイトで配布されている素材の性質上ないとは思いますが、アダルトサイトや公序良俗に反する利用はできません。<br>一般常識の範囲内でご利用ください。</li>
                            </ul>

                        </div>

                        <div class="content">
                            <h2 class="title is-3">利用規約の変更と免責・賠償請求について</h2>
                            <ul>
                                <li>本サイトの利用規約は、今後変更されることがあります。特にサービス提供内容変更の際は、抜本的に規約が変更される可能性があります。</li>
                                <li>他社・他サービスでロゴとして使用し、商標登録することを固く禁じます。</li>
                                <li>本サイトで提供される素材を利用された方が、本サイトで定める禁止事項に抵触する行為を含み本規約に反する行為が確認された場合、<br>各種費用を請求させていただきます。</li>
                            </ul>

                        </div>

                        <div class="content">
                            <h2 class="title is-3">お問い合わせ</h2>
                            <p class="">
                                素材の利用に関して、少しでも気になる事項・ご相談事項があれば、<a href="{{url('contact')}}">お問い合わせ</a>からご連絡ください。
                            </p>
                        </div>
                    </div>




                </div>

            </div>


        </main>
    </div>
    @include('layouts.footer')
</body>

</html>