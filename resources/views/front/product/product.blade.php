@extends('layouts.front')

@section('title', $record->name)

@section('css')
    <link rel="stylesheet" href="{{ asset('css/product-product.css') }}">
@endsection

@section('content')

<h1>產品介紹</h1>

<div class="container">
    <div class="img">{{ $record->img }}</div>
    <div class="row d-flex flex-column">
        <h2 class="col-md-6 name">產品名稱: {{ $record->name }}</h2>
        <p class="col-md-6 discript">產品描述: {{ $record->discript }}</p>
        <p class="col-md-6 price">產品價格: ${{ $record->price }}</p>
        <p class="col-md-6 discount">產品折扣: {{ $record->discount }}</p>
        <p class="col-md-6 sale-price">產品售價: ${{ $record->price * $record->discount }}</p>
    </div>
</div>

@endsection

