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
                <h2 class="card-header 1h-1 pt-3 pb-2">相關行程管理</h2>
                <div class="form-group pt-4 px-3 m-0">
                    <a href="{{route('itinerary.create')}}" class="btn btn-success">新增行程</a>
                </div>
                <hr>
                <div class="card-body">
                    <table id="my-table" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>              
                                <th>所屬洲</th>
                                <th>國家</th>
                                <th>地點</th>
                                <th>圖片</th>
                                <th width="200" >操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($itineraries as $itinerary)
                                <tr>
                                    <td>{{$itinerary->country->continent->name}}</td>
                                    <td>{{$itinerary->country->chinese_name}}</td>
                                    <td>{{$itinerary->place_chinese_name}}/{{$itinerary->place_english_name}}</td>
                                    <td><img src="{{Storage::url($itinerary->image_url)}}" alt="" width="200">  </td>
                                    <td>
                                        <a href="{{route('itinerary.edit',['itinerary' => $itinerary->id])}}" class="btn btn-primary">編輯</a>
                                        <button class="btn btn-danger delete-btn">刪除</button>
                                        <form action="{{route('itinerary.destroy',['itinerary' => $itinerary->id])}}" method="post" class="d-none">
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