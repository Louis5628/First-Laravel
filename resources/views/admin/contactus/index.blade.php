@extends('layouts.app')

@section('page_title', '聯絡我們管理')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
@endsection

@section('h1_title', '聯絡我們管理')

@section('content')

<table id="my-datatable" class="display" style="width:100%">
    <thead>
        <tr>
            <th>姓名</th>
            <th>信箱</th>
            <th>電話</th>
            <th>內容</th>
            <th>操作</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($list as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->phone }}</td>
                <td>{{ $item->content }}</td>
                <td>
                    <a href="{{ asset('/admin/contactus/edit') }}/{{$item->id}}" class="btn btn-primary btn-sm">編輯</a>
                    <form style="display: inline-block" action="{{ asset('/admin/contactus/delete')}}/{{$item->id}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger btn-sm">刪除</button>
                    </form>

                </td>
            </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <th>姓名</th>
            <th>信箱</th>
            <th>電話</th>
            <th>內容</th>
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
    </script>

@endsection
