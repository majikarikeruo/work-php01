@extends('layouts.app')


@section('content')

<div class="container mx-auto text-gray-600 py-10 max-w-[720px]">

    <h1 class="text-xl font-bold mb-4">お問い合わせ</h1>
    <p>お問い合わせなどあれば、下記フォームよりご連絡ください。</p>
    <p>お問い合わせ内容によっては、ご返信いたしかねる場合もありますので、あらかじめご了承ください。</p>

    @if(count($errors) > 0)
    <ul class="errors">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif
    <form method="POST" action="{{ url('/mailsend') }}" class="mt-10">
        @csrf


        <div class="mb-8">
            <label class="font-bold text-xl block mb-2">お名前</label>

            <div class="field">
                <input class="w-full border-gray-200 rounded-md text-sm border" type="text" name="name" placeholder="例）コスゲリアン太郎">
            </div>
        </div>

        <div class="mb-8">
            <label class="font-bold text-xl block mb-2">メールアドレス</label>

            <div class="control">
                <input class="w-full border-gray-200 rounded-md text-sm border" type="email" name="email" placeholder="例）info@kosugerian.com" value="">
            </div>
        </div>


        <div class="mb-8">
            <label class="font-bold text-xl block mb-2">件名</label>

            <div class="control">
                <input class="w-full border-gray-200 rounded-md text-sm border" type="text" name="subject" placeholder="素材の利用に関して">
            </div>
        </div>

        <div class="mb-8">
            <label class="font-bold text-xl block mb-2">お問い合わせ内容</label>
            <div class="control">
                <textarea class="w-full border-gray-200 rounded-md text-sm border" rows="10" name="message" placeholder="素材を○○のケースで利用したいのですが、可能でしょうか？？"></textarea>
            </div>
        </div>

        <div class="mb-8 text-center">
            <button class="p-3 text-lg rounded-lg w-16 md:w-24 font-medium text-center text-white bg-[#111727]">
                送信
            </button>
        </div>
    </form>

</div>
@endsection