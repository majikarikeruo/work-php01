@extends('layouts.app')


@section('content')
<div class="container mx-auto text-gray-600 py-10 max-w-[1140px]">
    <h1 class="text-2xl font-bold mb-4">素材の使い方と利用規約について</h1>
    <p>コスゲリアン.comで配布されている素材の使い方と利用規約については、以下をご一読ください。</p>

    <h2 class="text-xl font-bold mt-10 mb-4 pb-2 border-b-gray-200 border-b border-solid">素材の利用条件</h2>
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


    <h2 class="text-xl font-bold mt-10 mb-4 pb-2 border-b-gray-200 border-b border-solid">禁止事項</h2>
    <ul>
        <li>本サイトで配布されている素材を、そのまま転用したり改変したりして販売・再配布することを固く禁じます。</li>
        <li>他社・他サービスでロゴとして使用し、商標登録することを固く禁じます。</li>
        <li>ネットワーク又はシステム等に過度な負荷をかける行為を禁じます。</li>
        <li>本サイトのロゴを直接リンクで利用する行為を禁じます（ダウンロードしてご利用ください）</li>
        <li>本サイトで配布されている素材の性質上ないとは思いますが、アダルトサイトや公序良俗に反する利用はできません。<br>一般常識の範囲内でご利用ください。</li>
    </ul>

    <h2 class="text-xl font-bold mt-10 mb-4 pb-2 border-b-gray-200 border-b border-solid"">利用規約の変更と免責・賠償請求について</h2>
    <ul>
        <li>本サイトの利用規約は、今後変更されることがあります。特にサービス提供内容変更の際は、抜本的に規約が変更される可能性があります。</li>
        <li>他社・他サービスでロゴとして使用し、商標登録することを固く禁じます。</li>
        <li>本サイトで提供される素材を利用された方が、本サイトで定める禁止事項に抵触する行為を含み本規約に反する行為が確認された場合、<br>各種費用を請求させていただきます。</li>
    </ul>

    <h2 class=" text-xl font-bold mt-10 mb-4 pb-2 border-b-gray-200 border-b border-solid">お問い合わせ</h2>
    <p class="">
        素材の利用に関して、少しでも気になる事項・ご相談事項があれば、<a href="{{route('contact')}}" class="text-[#3490dc]">お問い合わせ</a>からご連絡ください。
    </p>
</div>


@endsection