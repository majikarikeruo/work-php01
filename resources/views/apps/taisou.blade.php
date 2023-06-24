@extends('layouts.app')


@section('title')
コスゲリアン体操
@endsection

@section('content')
<div class="container mx-auto text-gray-600 py-10 max-w-[1140px] px-4">

    <h1 class="text-2xl font-bold mb-4">コスゲリアン体操</h1>
    <p>Amazon Echoで利用できるスキル（スマートフォンでいうアプリに相当します）を開発し、公開しています。</p>
    <p>Amazon Echoシリーズをお持ちの方であれば、どなたでも利用できます。</p>
    <p class="my-10"><a href="https://www.amazon.co.jp/tatsuyakosuge-%E3%82%B3%E3%82%B9%E3%82%B2%E3%83%AA%E3%82%A2%E3%83%B3%E4%BD%93%E6%93%8D/dp/B07KF9KSPG" target="_blank" class="text-[#3490dc]">コスゲリアン体操（Amazon Echoスキルストアより）</a></p>

    <div class="aspect-video md:aspect-auto">
        <iframe class="aspect-video md:aspect-auto w-full md:w-96 md:h-72" width="" height="" src="https://www.youtube.com/embed/GnAg47GSveo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>


    <h2 class="text-xl font-bold mt-10 mb-4 pb-2 border-b-gray-200 border-b border-solid">コスゲリアン体操とは？</h2>
    <p class="mb-10">コスゲリアン体操では、日々の健康維持のために効果的な体操を提供しています。<br>Amazon Echo版では、音声のみで体操指示を行うことができるため、寝る前などに手軽に体操を行うことが可能です。</p>
    <p class="mb-10">
        コスゲリアン体操についての詳細は、管理人のブログ記事にある <br><a href="https://arrown-blog.com/kosugerian-taisou/" target="_blank" class="text-[#3490dc]">アレクサ（Alexa）スキル「コスゲリアン体操」をリリース！（Amazon Echo対応）そして今後の野望について</a><br> をご覧頂けますと幸いです。
    </p>
    <p><img src="https://kosugelian.net/images/taisou.jpg" alt="コスゲリアン体操のイラスト" width="400"></p>
</div>
@endsection