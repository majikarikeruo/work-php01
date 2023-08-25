@extends('layouts.admin')

@section('content')

<!-- フラッシュメッセージ -->
@if ($errors->any())
<div id="flash-message" class="mb-4 flex justify-between items-center p-3 bg-red-500 opacity-90 shadow">
    @foreach ($errors->all() as $error)
    <div class="text-white">{{ $error }}</div>
    @endforeach
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" id="flash-message-cancel" class="text-white bi bi-x-circle cursor-pointer" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
    </svg>
</div>
@endif

<div class="white">
    <div class="bg-white p-10 shadow-lg">
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-2xl font-bold">ページ新規登録</h1>
            <a href="{{ route('dashboard.page.index') }}" class="text-sm underline">一覧へ戻る</a>
        </div>
        <form action="{{ route('dashboard.page.store') }}" method="post" enctype="multipart/form-data" id="js-page-form">
            @csrf
            <ul>

                <li class="mb-8">
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900">タイトル:</label>
                    <input type="text" name="title" value="{{$page->title}}"  class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm border">
                </li>
                <li class="mb-8">
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900">ページSlug</label>
                    <input type="text" name="slug" value="{{$page->slug}}" class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm border">
                </li>
                <li class="mb-8">
                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900"> 表示内容:</label>
                    <div id="contentEditor"  style="height: 200px;">{{$page->content}}</div>
                    <input type="hidden" name="content" class="js-hidden-page">
                </li>
            </ul>

            <div class="text-center">
                <input type="submit" value="ページ内容編集" class="inline-flex justify-center items-center px-3 py-2 text-sm rounded-lg w-40 font-medium text-center text-white bg-[#111727]">
            </div>
        </form>
    </div>
</div>
@endsection