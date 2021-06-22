@extends('layouts.app')

@section('page_title', '編輯產品資料')

@section('css')

@endsection

@section('h1_title', '編輯產品資料')

@section('content')

<form action="{{ asset('/admin/product/update') }}/{{ $record->id }}" method="POST">
    @csrf
    <div class="form-row d-flex flex-column">
        <div class="form-group col-md-6">
            <label for="name">產品名稱</label>
            <input type="text" class="form-control" id="name" name="name" required value="{{ $record->name }}">
        </div>
        <div class="form-group col-md-6">
            <label for="price">產品價格</label>
            <input type="text" class="form-control" id="price" name="price" required value="{{ $record->price }}">
        </div>
        <div class="form-group col-md-6">
            <label for="discount">產品折扣</label>
            <input type="text" class="form-control" id="discount" placeholder="0~1" name="discount" required value="{{ $record->discount }}">
        </div>

        <div class="form-group">
            <label for="discript">產品描述</label>
            <textarea class="form-control" id="discript" rows="3" name="discript" required>{{ $record->discript }}</textarea>
        </div>
        <div class="form-group col-md-6">
            <label for="img">產品圖片</label>
            <input type="text" class="form-control" id="img" name="img" required value="{{ $record->img }}">
            <button type="button" class="btn btn-secondary mt-2">上傳圖片</button>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">送出</button>
</form>

@endsection


@section('js')

@endsection
