@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.css" integrity="sha512-ZbehZMIlGA8CTIOtdE+M81uj3mrcgyrh6ZFeG33A4FHECakGrOsTPlPQ8ijjLkxgImrdmSVUHn1j+ApjodYZow==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    .note-btn.dropdown-toggle:after {
        content: none;
    }
</style>
@endsection

@section('main')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">首頁</a></li>
            <li class="breadcrumb-item"><a href="{{route('itinerary.index')}}">相關行程管理</a></li>
            <li class="breadcrumb-item active" aria-current="page">編輯行程</li>
        </ol>
    </nav>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h2 class="card-header pt-3 pb-2">行程 - 編輯</h2>

                <div class="card-body">
                    <form method="POST" action="{{route('itinerary.update',['itinerary' => $itinerary->id])}}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group row py-2">
                            <label for="country" class="col-sm-1 col-form-label">國家<span class="text-danger">*</span></label>
                            <div class="col-sm-11">
                                <select class="form-control my-1 mr-sm-2" id="country" name="country_id" required>
                                    <option value="" hidden>請選擇國家</option>
                                    @foreach ($countries as $country)
                                        <option value="{{$country->id}}" @if ($country->id == $itinerary->country_id) selected @endif {{$country->chinese_name}}> {{$country->chinese_name}}</option>    
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row py-2">
                            <label for="place-chinese-name" class="col-sm-1 col-form-label">地點(中文名)<span class="text-danger">*</span></label>
                            <div class="col-sm-11">
                                <input type="text" class="form-control" id="place" name="place_chinese_name" value="{{$itinerary->place_chinese_name}}" required>
                            </div>
                        </div>
                        <div class="form-group row py-2">
                            <label for="place-english-name" class="col-sm-1 col-form-label">地點(英文名)<span class="text-danger">*</span></label>
                            <div class="col-sm-11">
                                <input type="text" class="form-control" id="place-english-name" name="place_english_name" value="{{$itinerary->place_english_name}}" required>
                            </div>
                        </div>
                        <div class="form-group row py-2">
                            <label for="image-url" class="col-sm-1 col-form-label">照片<span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="file" accept="image/*" class="form-control" id="image-url" name="image_url">
                                <img id="preview-img" class="mt-2" src="{{Storage::url($itinerary->image_url)}}" alt="" width="200">
                            </div>
                        </div>
                        <div class="form-group row py-2">
                            <label for="introduce" class="col-sm-1 col-form-label">景點介紹<span class="text-danger">*</span></label>
                            <div class="col-sm-11">
                                <textarea class="form-control" id="introduce" name="introduce"  rows="5" required>{{$itinerary->introduce}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row py-2">
                            <label for="information" class="col-sm-1 col-form-label">地點資訊<span class="text-danger">*</span></label>
                            <div class="col-sm-11">
                                <textarea class="form-control" id="information" name="information"  rows="5" required>{{$itinerary->information}}</textarea>
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
<!-- Summernote Core js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.js"></script>

<script>
    /// Summernote 初始化設定
    $(document).ready(function() {
        $('#introduce').summernote({
            minHeight: 300
        });
    });
    $(document).ready(function() {
        $('#information').summernote({
            minHeight: 300
        });
    });

    const imageUrlElement = document.querySelector('#image-url');
    imageUrlElement.addEventListener('change',function(){
        //預覽照片
        //如果有上傳檔案
        if(this.files && this.files[0]){
            imageUrl = this.files[0];
            //用來讀取檔案
            let reader = new FileReader();
            
            reader.addEventListener('load',function(){
                //要顯示的地方
                let previewImg = document.querySelector('#preview-img');
                //設定src
                previewImg.setAttribute("src", reader.result)
            }); 
            reader.readAsDataURL(this.files[0]);
        }
    });
</script>
@endsection