@extends('layouts.front')

@section('title', 'product')

@section('css')
<link rel="stylesheet" href="{{ asset('css/product-index.css') }}">
@endsection

@section('content')
<h1>產品總覽</h1>

<div class="row">
    @foreach ($product as $item)
    <div class="col-md-4">
        <div class="card" style="width: 18rem;">
        <div class="card-body">
            <div class="img">{{ $item->img }}</div>
          <h5 class="card-name">產品名稱: {{ $item->name }}</h5>
          <p class="card-discript">產品描述: {{ $item->discript }}</p>
          <p class="card-price">產品價格: ${{ $item->price }}</p>
          <p class="card-discount">產品折扣: {{ $item->discount }}</p>
          <p class="sale-price">產品售價: ${{ $item->price * $item->discount }}</p>

        <a href="{{ asset('/products') }}/{{ $item->id }}">查看更多</a>
        </div>
      </div>
    </div>
    @endforeach
</div>


@endsection
