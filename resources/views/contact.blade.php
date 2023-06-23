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

                <div class="column is-offset-3 is-6">
                    <h1 class="title is-2">お問い合わせ</h1>
                    <p>お問い合わせなどあれば、下記フォームよりご連絡ください。</p>
                    <p>お問い合わせ内容によっては、ご返信いたしかねる場合もありますので、あらかじめご了承ください。</p>

                    @if(count($errors) > 0)
                    <ul class="errors">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    @endif
                    <form method="POST" action="{{ url('/mailsend') }}" class="form">
                        {{ csrf_field() }}


                        <div class="field">
                            <div class="label">
                                <label class="label">お名前</label>
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <input class="input" type="text" name="name" placeholder="例）コスゲリアン太郎">
                                </div>
                            </div>
                        </div>

                        <div class="field">
                            <div class="label">
                                <label class="label">メールアドレス</label>
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <div class="control">
                                        <input class="input" type="email" name="email" placeholder="例）info@kosugerian.com" value="">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="field">
                            <div class="label">
                                <label class="label">件名</label>
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <div class="control">
                                        <input class="input" type="text" name="subject" placeholder="素材の利用に関して">
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="field">
                            <div class="label">
                                <label class="label">お問い合わせ内容</label>
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <div class="control">
                                        <textarea class="textarea" name="message" placeholder="素材を○○のケースで利用したいのですが、可能でしょうか？？"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="field">
                            <div class="field">
                                <div class="control has-text-centered">
                                    <button class="button is-primary is-large button-submit">
                                        送信
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>


            </div>
        </main>
    </div>
    @include('layouts.footer')
</body>

</html>