@extends('layouts.app')


@section('title')
{{$title}}
@endsection



@section('content')


<div class="container mx-auto text-gray-600 py-10 max-w-[1140px] px-4">
    {{ $content }}
</div>
@endsection