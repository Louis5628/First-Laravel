@extends('layouts.front')

@section('title', '聯絡我們')

@section('css')

@endsection

@section('content')
<form action="/contactus/send" method="POST">
    @csrf
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="name">姓名</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>
      <div class="form-group col-md-6">
        <label for="email">email</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
    </div>
    <div class="form-group">
      <label for="phone">電話</label>
      <input type="text" class="form-control" id="phone" placeholder="09-87654321" name="phone" required>
    </div>
    <div class="form-group">
        <label for="content">內容</label>
        <textarea class="form-control" id="content" rows="3" name="content" required></textarea>
      </div>


    <button type="submit" class="btn btn-primary">送出</button>
</form>


@endsection
