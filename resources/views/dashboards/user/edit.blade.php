@extends('layouts.admin')

@section('content')


<div class="white">
    <div class="bg-white p-10 shadow-lg">
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-2xl font-bold">ユーザー編集</h1>
            <a href="{{ route('admins.index') }}" class="text-sm underline">一覧へ戻る</a>
        </div>
        <form action="/upload" method="post" enctype="multipart/form-data">
            <ul>

                <li class="mb-8">
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900">タイトル:</label>
                    <input type="text" class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm border">

                </li>
                <li class="mb-8">
                    <label for="file-input" class="">画像</label>
                    <div class="mb-10">
                        <img src="https://kosugelian.net/images/stamp1.png" width="200" alt="">
                    </div>
                    <input type="file" name="file-input" id="file-input" class="block w-full border border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500
                        file:bg-transparent file:border-0
                        file:bg-gray-100 file:mr-4
                        file:py-3 file:px-4
                       ">
                </li>

                <li class="mb-8">
                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900">説明文:</label>
                    <textarea id="description" rows="6" class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm border"></textarea>
                </li>
            </ul>

            <div class="text-center">
                <input type="submit" value="送信" class="inline-flex justify-center items-center px-3 py-2 text-sm rounded-lg w-40 font-medium text-center text-white bg-[#111727]">
            </div>
        </form>
    </div>

</div>
@endsection