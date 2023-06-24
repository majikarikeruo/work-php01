@extends('layouts.app')


@section('content')
<div class="bg-[#222]">
    <div class="flex justify-center">
        <iframe width="560" height="315" class="youtube--inner" src="https://www.youtube.com/embed/0JohOCnMjPg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>
<div class="container px-4 py-8">
    <div class="text-center">
        <ul class="flex flex-col md:flex-row justify-center gap-4">
            <li class="banner-item"><a href="https://store.line.me/stickershop/product/1450874/ja" target="_blank"><img src="https://kosugelian.net/images/banner.png" alt="LINEスタンプ・コスゲの日常発売中"></a></li>
            <li class="banner-item"><a href="{{url('taisou')}}" target="_blank"><img src="https://kosugelian.net/images/banner2.png" alt="LINEスタンプ・コスゲの日常発売中"></a></li>
        </ul>
    </div>
    <div class="py-20">
        <h2 class="text-center font-bold text-2xl mb-4">Illustration <span class="block mt-2 text-sm text-gray-400">素材イラスト一覧</span></h2>
        <p class="text-sm text-left md:text-center">スマートフォンをお使いの場合は、画像を長押しするなどして<br class="hidden md:block">
            「イメージを保存（iPhoneの場合）」などをご選択の上、<br class="hidden md:block">
            素材をダウンロードいただいて問題ありません。</p>

        <div class="grid grid-cols-2 md:grid-cols-3 gap-4 gap-y-12 mt-8 max-w-6xl mx-auto justify-center">
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
@endsection