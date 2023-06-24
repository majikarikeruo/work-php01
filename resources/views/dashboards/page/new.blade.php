@extends('layouts.admin')

@section('content')
<!-- Todo -->
<!-- <link href="https://cdn.quilljs.com/1.0.0/quill.snow.css" rel="stylesheet"> -->

<div class="white">
    <div class="bg-white p-10 shadow-lg">
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-2xl font-bold">ページ新規登録</h1>
            <a href="{{ route('dashboard.page.index') }}" class="text-sm underline">一覧へ戻る</a>
        </div>
        <form action="{{ route('dashboard.page.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <ul>

                <li class="mb-8">
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900">タイトル:</label>
                    <input type="text" name="title" class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm border">
                </li>
                <li class="mb-8">
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900">ページSlug</label>
                    <input type="text" name="slug" class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm border">
                </li>
                <li class="mb-8">
                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900"> 表示内容:</label>
                    <div id="contentEditor"  style="height: 200px;"></div>
                    <input type="hidden" name="" class="js-hidden-page">
                </li>
            </ul>

            <div class="text-center">
                <input type="submit" value="画像登録" class="inline-flex justify-center items-center px-3 py-2 text-sm rounded-lg w-40 font-medium text-center text-white bg-[#111727]">
            </div>
        </form>
    </div>
</div>
@endsection