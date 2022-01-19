@extends('layouts.master')

@section('css')
    
@endsection

@section('main')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">首頁</a></li>
            <li class="breadcrumb-item"><a href="{{route('continent.index')}}">洲管理</a></li>
            <li class="breadcrumb-item active" aria-current="page">編輯洲</li>
        </ol>
    </nav>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h2 class="card-header pt-3 pb-2">洲 - 編輯</h2>

                <div class="card-body">
                    <form method="POST" action="{{route('continent.update',['continent'=>$continent->id])}}">
                        @csrf
                        @method('PATCH')
                        <div class="form-group row py-2">
                            <label for="name" class="col-sm-1 col-form-label">名稱<span class="text-danger">*</span></label>
                            <div class="col-sm-11">
                                <input type="text" class="form-control" id="name" name="name" value="{{$continent->name}}" required>
                            </div>
                        </div>
                        <div class="form-group row py-2">
                            <div class="col-sm-12 text-center">
                                <button type="submit" class="btn btn-primary">更新</button>
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