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
    <form action="{{route('dashboard.stamp.search')}}" method="GET" class="flex">
        <input type="search" name="query" placeholder="検索" class="mr-2 py-3 px-4 pl-10 block md:w-80 border-gray-200 rounded-md text-sm border">
        <button type="submit" class="px-3 py-2 text-sm rounded-lg w-16 md:w-24 font-medium text-center text-white bg-[#111727]">検索</button>
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
    <div class="flex justify-between items-center mb-6">
        <div>
            <span>{{ ($stamps->currentPage() -1) * $stamps->perPage() + 1}}件〜{{ (($stamps->currentPage() -1) * $stamps->perPage() + 1) + (count($stamps) -1)  }}件を表示</span>
            <span>(全{{ $stamps->total() }}件)</span>
        </div>
        <div class="flex items-center">
            <span class="mr-3">並び替え</span>
            <form action="{{route('dashboard.stamp.index')}}" method="GET" class="flex" id="sortForm">
                <select name="sort" id="sort" class="border border-gray-200 rounded-md text-sm" onchange="document.getElementById('sortForm').submit();">
                    <option value="created_at_asc" {{ request('sort') == 'created_at_asc' ? 'selected' : '' }}>登録順（新しい順）</option>
                    <option value="created_at_desc" {{ request('sort') == 'created_at_desc' ? 'selected' : '' }}>登録順（古い順）</option>
                    <option value="title" {{ request('sort') == 'title' ? 'selected' : '' }}>タイトル順</option>
                </select>
            </form>

        </div>
    </div>


    <div class="flex-none mb-4 px-0 flex items-center">
        <form action="{{route('dashboard.stamp.bulkDestroy')}}" class="mr-8 js-delete-form hidden" method="POST">
            @csrf
            @method('DELETE')
            <input type="hidden" name="deleteStamp" value="" class="js-delete-stamp">
            <button type="submit" class="js-bulk-delete inline-flex items-center px-3 py-2 text-sm rounded-lg w-50 font-medium text-center border-solid border text-[#f00] bg-white border-[#f00]">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="3 6 5 6 21 6"></polyline>
                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m6 0V4a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v2"></path>
                    <line x1="10" y1="11" x2="10" y2="17"></line>
                    <line x1="14" y1="11" x2="14" y2="17"></line>
                </svg>
                <span class="inline-block ml-3">選択中のスタンプを削除</span>
            </button>
        </form>
        <label for="allCheck">
            <input type="checkbox" name="" id="allCheck">
            <span class="inline-block ml-3 js-check-label" id="allCheckComment">全て選択</span>
        </label>
    </div>

    @foreach ($stamps as $stamp)
    <div class="border border-gray-200 bg-white">
        <a href="{{route('dashboard.stamp.edit', ['stamp'=>$stamp->id]) }}" class="relative flex items-center px-4 py-2 text-sm shadow-sm font-medium hover:bg-gray-100 p-4 ">
            <div class="flex-none px-4 md:px-8">
                <input type="checkbox" name="stamps[]" id="" value="{{$stamp->id}}" class="js-check">
            </div>
            <div class="flex justify-center mr-1 md:mr-8 flex-none w-20">
                <img class="rounded-t-lg" src="{{Storage::url($stamp->image_url)}}" width="120" alt="" />
            </div>
            <div class="md:flex md:grow items-center p-2 md:p-5">
                <div class="md:flex md:grow">
                    <h5 class="flex-none w-[120px] mb-2 mr-20 text-xl font-bold text-left tracking-tight text-gray-900 ">{{$stamp->title}}</h5>
                    <p class="text-xs md:text-sm h-[3rem] md:h-[5rem] overflow-hidden overflow-ellipsis">{{$stamp->description}}</p>
                </div>
                <form action="{{route('dashboard.stamp.destroy',['stamp' => $stamp->id])}}" method="POST" class="mt-4">
                    @csrf
                    @method('DELETE')
                    <button class="js-delete-button px-3 py-2 text-sm rounded-lg w-16 md:w-24 font-medium text-center text-white bg-red-600">削除</button>
                </form>
            </div>
        </a>
    </div>
    @endforeach

    <div class="mt-8 flex justify-center">
        {{ $stamps->links() }}
    </div>

</div>
@endsection