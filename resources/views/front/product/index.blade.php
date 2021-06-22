@extends('layouts.front')

@section('title', 'product')

@section('css')
<link rel="stylesheet" href="{{ asset('css/product-index.css') }}">
@endsection

@section('content')
<h1>產品總覽</h1>

<div class="row">
    @foreach ($product as $key => $item)
    <div class="col-md-3 mb-3">
        <div class="card" style="">
        <div class="card-body">
            <div class="img">{{ $item->img }}</div>
          <h5 class="card-name">產品名稱: {{ $item->name }}</h5>
          <p class="card-discript">產品描述: {{ $item->discript }}</p>
          <p class="card-price">產品價格: ${{ $item->price }}</p>
          <p class="card-discount">產品折扣: {{ $item->discount }}</p>
          <p class="sale-price">產品售價: ${{ $discount_price[$key] }}</p>

        <a href="{{ asset('/products') }}/{{ $item->id }}">查看更多</a>
        </div>
      </div>
    </div>
    @endforeach
</div>


{{-- Modal --}}

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Launch demo modal
  </button>

  <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            ...
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        </div>
    </div>


@endsection
