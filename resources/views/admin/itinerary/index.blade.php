@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <style>
        th,td {
            text-align: center;
            vertical-align: middle;
        }
    </style>
@endsection

@section('main')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <h2 class="card-header lh-1 pt-3 pb-2">相關行程管理</h2>
                <div class="form-group pt-4 px-3 m-0">
                    <a href="" class="btn btn-success">新增行程</a>
                </div>
                <hr>
                <div class="card-body">
                    <table id="my-table" class="display">
                    <thead>
                        <tr>
                            <th>標題</th>
                            <th width="250">圖片</th>
                            <th width="120">操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Row 1 Data 1</td>
                            <td>Row 1 Data 2</td>
                            <td>
                                <a href="" class="btn btn-primary">編輯</a>
                                <a href="" class="btn btn-danger">刪除</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
        $('#my-table').DataTable();
    });
</script>
@endsection