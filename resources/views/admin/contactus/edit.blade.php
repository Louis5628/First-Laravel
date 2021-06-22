@extends('layouts.app')

@section('page_title', '編輯聯絡我們')

@section('css')

@endsection

@section('h1_title', '編輯聯絡我們')

@section('content')

<form action="{{ asset('/admin/contactus/update') }}/{{ $record->id }}" method="POST">
  @csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="name">姓名</label>
      <input type="text" class="form-control" id="name" name="name" required value="{{ $record->name }}">
    </div>
    <div class="form-group col-md-6">
      <label for="email">email</label>
      <input type="email" class="form-control" id="email" name="email" required value="{{ $record->email }}">
    </div>
  </div>
  <div class="form-group">
    <label for="phone">電話</label>
    <input type="text" class="form-control" id="phone" placeholder="09-87654321" name="phone" required
      value="{{ $record->phone }}">
  </div>
  <div class="form-group">
    <label for="content">內容</label>
    <textarea class="form-control" id="content" rows="3" name="content" required>{{ $record->content }}</textarea>
  </div>

  <button type="submit" class="btn btn-primary">送出</button>
</form>

@endsection


@section('js')

@endsection