@extends('layouts.front')

@section('title', $record->title)

@section('css')
    <link rel="stylesheet" href="{{ asset('css/news.css') }}">
@endsection

@section('content')

<h1>最新消息-內頁</h1>

<div class="container">
    <h2 class="title">{{ $record->title }}</h2>
    <p class="text">{{ $record->content }}</p>
</div>

@endsection
