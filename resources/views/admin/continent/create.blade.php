@extends('layouts.master')
@section('css')
    
@endsection



@section('main')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">首頁</a></li>
                <li class="breadcrumb-item"><a href="{{route('continent.index')}}">洲管理</a></li>
                <li class="breadcrumb-item active" aria-current="page">新增洲</li>
            </ol>
        </nav>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <h2 class="card-header pt-3 pb-2">洲 - 新增</h2>

                    <div class="card-body">
                        <form method="POST" action="{{route('continent.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row py-2">
                                <label for="name" class="col-sm-1 col-form-label">洲名稱<span class="text-danger">*</span></label>
                                <div class="col-sm-11">
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                            </div>
                            <div class="form-group row py-2">
                                <div class="col-sm-12 text-center">
                                    <button type="submit" class="btn btn-primary" >新增</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')

@endsection