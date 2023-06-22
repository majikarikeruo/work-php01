@extends('layouts.admin')

@section('content')
<h2 class="text-2xl font-bold mb-8">スタンプ一覧</h2>

<div class="mb-8 inline-block relative">
    <span class="inline-block w-5 absolute left-3 top-1/2 -translate-y-1/2">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="11" cy="11" r="8"></circle>
            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
        </svg>
    </span>
    <form action="{{route('dashboard.search')}}" method="GET">
        <input type="search" name="query" placeholder="検索" class="py-3 px-4 pl-10 block w-80 border-gray-200 rounded-md text-sm border">
    </form>
</div>

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


<div class="w-full">
    @foreach ($stamps as $stamp)
    <div class="border border-gray-200 bg-white">
        <a href="/dashboard/{{$stamp->id}}/edit" class="relative flex items-center px-3 py-2 text-sm shadow-sm font-medium hover:bg-gray-100 p-4 ">
            <div class="px-4 md:px-8">
                <input type="checkbox" name="" id="">
            </div>
            <div class="flex justify-center mr-8 flex-none w-20">
                <img class="rounded-t-lg" src="{{Storage::url($stamp->image_url)}}" width="120" alt="" />
            </div>
            <div class="md:flex grow items-center p-5">
                <div class="flex grow">
                    <h5 class="flex-none w-[120px] mb-2 mr-20 text-xl font-bold text-left tracking-tight text-gray-900 ">{{$stamp->title}}</h5>
                    <p class="text-sm h-[5rem] overflow-hidden overflow-ellipsis">{{$stamp->description}}</p>
                </div>

            </div>
        </a>
    </div>
    @endforeach

    <div class="mt-8 flex justify-center">
        {{ $stamps->links() }}
    </div>

</div>
@endsection