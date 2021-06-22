@extends('layouts.app')

@section('page_title', '新增產品')

@section('css')

@endsection

@section('h1_title', '新增產品')

@section('content')

<form action="/admin/product/productAdd" method="POST">
    @csrf
    <div class="form-row d-flex flex-column">
        <div class="form-group col-md-6">
            <label for="name">產品名稱</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group col-md-6">
            <label for="price">產品價格</label>
            <input type="number" class="form-control" id="price" name="price" required>
        </div>
        <div class="form-group col-md-6">
            <label for="discount">產品折扣</label>
            <input type="number" class="form-control" step="0.1" maxlength="4" id="discount" placeholder="0.X" name="discount" required>
        </div>

        <div class="form-group">
            <label for="discript">產品描述</label>
            <textarea class="form-control" id="discript" rows="3" name="discript" required></textarea>
        </div>
        <div class="form-group col-md-6">
            <label for="img">產品圖片</label>
            <input type="text" class="form-control" id="img" name="img" required>
            <button type="button" class="btn btn-secondary mt-2">上傳圖片</button>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">送出</button>
</form>

@endsection


@section('js')

@endsection
