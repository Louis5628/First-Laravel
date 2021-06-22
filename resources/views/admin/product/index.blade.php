@extends('layouts.app')

@section('page_title', '產品管理')

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
@endsection

@section('h1_title', '產品管理')

@section('content')

<a href="{{ asset('/admin/product/add') }}">
    <button type="button" class="btn btn-success mb-3">新增產品</button>
</a>

<table id="my-datatable" class="display" style="width:100%">
        <thead>
            <tr>
                <th>產品圖片</th>
                <th>產品名稱</th>
                <th>產品描述</th>
                <th>產品價格</th>
                <th>產品折扣</th>
                <th>產品售價</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($list as $item)
                <tr>
                    <td>{{ $item->img }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->discript }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->discount }}</td>
                    <td>{{ $item->price * $item->discount }}</td>
                    <td>
                        <a href="{{ asset('/admin/product/edit') }}/{{$item->id}}" class="btn btn-primary btn-sm">編輯</a>
                        <form class="form-delete" style="display: inline-block" action="{{ asset('/admin/product/delete')}}/{{$item->id}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm btn-delete">刪除</button>
                        </form>

                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>產品圖片</th>
                <th>產品名稱</th>
                <th>產品描述</th>
                <th>產品價格</th>
                <th>產品折扣</th>
                <th>產品售價</th>
                <th>操作</th>
            </tr>
        </tfoot>
    </table>


@endsection


@section('js')

    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
        $('#my-datatable').DataTable({
            "ordering": false,
        });
        } );

        // 預防不可逆操作
        $('.btn-delete').click(function (e) {
            // 阻止送出表單
            e.preventDefault();
            var yes = confirm('確定刪除該筆資料嗎?');
            if (yes) {
                $('.form-delete').submit();
            } else {
                alert('取消該操作')
            }
        })
    </script>

@endsection
