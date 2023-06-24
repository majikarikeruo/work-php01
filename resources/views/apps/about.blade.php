@extends('layouts.app')


@section('title')
コスゲリアンについて
@endsection


@section('content')
<div class="container mx-auto text-gray-600 py-10 max-w-[1140px] px-4">
    <h1 class="text-2xl font-bold mb-4">コスゲリアンについて</h1>
    <p>本サイトは、<a href="https://store.line.me/stickershop/product/1450874/ja" target="_blank">LINEスタンプ・コスゲの日常</a>で展開したキャラクター「コスゲリアン」の更なる認知拡大を目指して制作されました。</p>
    <p>本サイトにて配布されている素材は無料でご利用いただけます。利用規約などについては<a href="{{url('/howtouse/')}}"></a>をご一読いただき、<br>ルールの範囲内でぜひ楽しく素材を利用いただければと思います！</p>

    <h2 class="text-xl font-bold mt-10 mb-4 pb-2 border-b-gray-200 border-b border-solid">管理人</h2>
    <p>管理人は、<a href="https://arrown-blog.com" target="_blank" class="text-[#3490dc]">Arrown</a>というブログを運営している <a href="https://twitter.com/keinkosuge/" target="_blank" class="text-[#3490dc]">@keinkosuge</a>です。<br>よろしければ、ぜひブログもご覧になってみてください。</p>

    <h2 class="text-xl font-bold mt-10 mb-4 pb-2 border-b-gray-200 border-b border-solid">本サイトの運営方針</h2>
    <p>本サイトは、2019年3月頃までは現行のサービス提供内容を維持していきますが、以降は方針・提供内容を変更する可能性があります。</p>
    <p>規約についても、サービス内容変更の際には、抜本的に変わる可能性があります。</p>

    <h2 class="text-xl font-bold mt-10 mb-4 pb-2 border-b-gray-200 border-b border-solid">寄付について</h2>
    <p>本サイトの運営にはそれなりの経費がかかります。本サイトおよびコスゲリアンの発展を応援したい！と思ってくださった方は、<br><a href="https://store.line.me/stickershop/product/1450874/ja" target="_blank" class="text-[#3490dc]">LINEスタンプ・コスゲの日常</a>をご購入いただけますと大変幸いです。</p>
</div>
@endsection