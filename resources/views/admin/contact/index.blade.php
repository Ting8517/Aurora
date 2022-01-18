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
                    <h2 class="card-header 1h-1 pt-3 pb-2">聯絡我們管理</h2>
                    {{-- <div class="form-group pt-4 px-3 m-0">
                        <a href="{{route('facility.create')}}" class="btn btn-success">新增設施</a>
                    </div> --}}
                    <hr>
                    <div class="card-body">
                        <table id="my-table" class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>姓名</th>
                                    <th>電話</th>
                                    <th>Email</th>
                                    <th>訊息</th>
                                    <th>操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contacts as $contact)
                                    <tr>
                                        <td>{{$contact->name}}</td>
                                        <td>{{$contact->phone}}</td>
                                        <td>{{$contact->email}}</td>
                                        <td>{{$contact->message}}</td>
                                        <td>
                                            @if( $contact->read_status === '未讀')
                                                <button class="btn btn-warning unread-btn">{{$contact->read_status}}</button>
                                                <form action="{{route('contact.update',['id' => $contact->id])}}" method="post" class="d-none">
                                                    @csrf
                                                    @method('PATCH')
                                                    <input type="hidden" name="read_status" value="已讀">
                                                </form>
                                            @endif
                                            
                                            <button class="btn btn-danger delete-btn">刪除</button>
                                            <form action="{{route('contact.destroy',['id' => $contact->id])}}" method="post" class="d-none">
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
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> --}}
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

        //未讀按鈕
        const unreadElements = document.querySelectorAll('.unread-btn');
        unreadElements.forEach(function(unreadElement){
            unreadElement.addEventListener('click',function(){
                this.classList.add('d-none');
                // this.style['visibility'] = 'hidden';
                this.nextElementSibling.submit();
                
            });
        });
    

    </script>
@endsection
