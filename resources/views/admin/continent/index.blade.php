@extends('layouts.master')

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
                <h2 class="card-header 1h-1 pt-3 pb-2">洲管理</h2>
                <div class="form-group pt-4 px-3 m-0">
                    <a href="{{route('continent.create')}}" class="btn btn-success">新增洲</a>
                </div>
                <hr>
                <div class="card-body">
                    <table id="my-table" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>              
                                <th>洲名稱</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($continents as $continent)
                                <tr>
                                    <td>{{$continent->name}}</td>
                                    <td>
                                        <a href="{{route('continent.edit',['continent' => $continent->id])}}" class="btn btn-primary">編輯</a>
                                        <button class="btn btn-danger delete-btn">刪除</button>
                                        <form action="{{route('continent.destroy',['continent' => $continent->id])}}" method="post" class="d-none">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


@section('js')
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script>
        
        //初始化datatable
        $(document).ready( function () {
            $('#my-table').DataTable({
                "order": [], //不排序,由後端來排
                language:{
                    url: "{{asset('js/datatable-zh.json')}}"
                }
            });
        });

    </script>
@endsection