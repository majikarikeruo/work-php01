@extends('layouts.admin')

@section('content')
<h2 class="text-2xl font-bold mb-8">スタンプ一覧</h2>

<!-- フラッシュメッセージ -->
@if (session('flashmessage'))
<div id="flash-message" class="mb-4 flex justify-between items-center p-3 bg-blue-500 opacity-90 shadow">
    <p class="text-white">{{ session('flashmessage') }}</p>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" id="flash-message-cancel" class="text-white bi bi-x-circle cursor-pointer" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
    </svg>
</div>
@endif


<div class="grid grid-cols-3 gap-4 w-full">
    @foreach ($stamps as $stamp)
    <div class="py-4 border border-gray-200 rounded-lg shadow-md bg-white">
        <a href="/dashboard/{{$stamp->id}}/edit" class="flex justify-center">
            <img class="rounded-t-lg" src="{{Storage::url($stamp->image_url)}}" width="200" alt="" />
        </a>
        <div class="p-5 text-center">
            <a href="/dashboard/{{$stamp->id}}/edit">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">{{$stamp->title}}</h5>
                <p class="mb-6">{{$stamp->description}}</p>
            </a>
            <a href="/dashboard/{{$stamp->id}}/edit" class="inline-flex justify-center items-center px-3 py-2 text-sm rounded-lg w-40 font-medium text-center text-white bg-[#111727]">
                編集する
                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </a>
        </div>
    </div>
    @endforeach

</div>
@endsection