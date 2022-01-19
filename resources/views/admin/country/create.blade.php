@extends('layouts.master')
@section('css')
    
@endsection

@section('main')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">首頁</a></li>
            <li class="breadcrumb-item"><a href="{{route('country.index')}}">國家管理</a></li>
            <li class="breadcrumb-item active" aria-current="page">新增國家</li>
        </ol>
    </nav>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h2 class="card-header pt-3 pb-2">國家 - 新增</h2>

                <div class="card-body">
                    <form method="POST" action="{{route('country.store')}}">
                        @csrf
                        <div class="form-group row py-2">
                            <label for="chinese-name" class="col-sm-1 col-form-label">中文名稱<span class="text-danger">*</span></label>
                            <div class="col-sm-11">
                                <input type="text" class="form-control" id="chinese-name" name="chinese_name" required>
                            </div>
                            <label for="english-name" class="col-sm-1 col-form-label">英文名稱<span class="text-danger">*</span></label>
                            <div class="col-sm-11">
                                <input type="text" class="form-control" id="english-name" name="english_name" required>
                            </div>
                            <label for="continent" class="col-sm-1 col-form-label">所屬洲<span class="text-danger">*</span></label>
                            <div class="col-sm-11">
                                <select class="form-control my-1 mr-sm-2" id="continent" name="continent_id" required>
                                    <option value="" hidden>請選擇洲</option>
                                    @foreach ($continents as $continent)
                                        <option value="{{$continent->id}}">{{$continent->name}}</option>    
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row py-2">
                            <div class="col-sm-12 text-center">
                                <button type="submit" class="btn btn-primary">新增</button>
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
