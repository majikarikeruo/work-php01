@extends('layouts.admin')

@section('content')


<div class="white">
    <div class="bg-white p-10 shadow-lg">
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-2xl font-bold">画像編集</h1>
            <a href="{{ route('dashboard.stamp.index') }}" class="text-sm underline">一覧へ戻る</a>
        </div>

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

        <form action="{{ route('dashboard.stamp.update',['stamp'=>$stamp->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <ul>
                <li class="mb-8">
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900">タイトル:</label>
                    <input type="text" name="title" value="{{$stamp->title}}" class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm border">
                </li>
                <li class="mb-8">
                    <label for="file-input" class="">画像</label>
                    <div class="mb-10">
                        <img src="{{Storage::url($stamp->image_url)}}" width="200" alt="">
                        <input type="hidden" name="image_url" value="{{$stamp->image_url}}">
                        <div class="text-sm text-gray-600">現在登録されている画像</div>
                    </div>
                    <input type="file" name="image" id="image" class="block w-full border border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500
                        file:bg-transparent file:border-0
                        file:bg-gray-100 file:mr-4
                        file:py-3 file:px-4
                       ">
                </li>

                <li class="mb-8">
                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900">説明文:</label>
                    <textarea id="description" name="description" rows="6" class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm border">{{$stamp->description}}</textarea>
                </li>
            </ul>

            <div class="text-center">
                <input type="submit" value="編集" class="inline-flex justify-center items-center px-3 py-2 text-sm rounded-lg w-40 font-medium text-center text-white bg-[#111727]">
            </div>
        </form>
    </div>

</div>
@endsection