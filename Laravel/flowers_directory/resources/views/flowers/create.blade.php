@extends('flowers.master')
@section('content')
@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>
            {{$error}}
        </li>
        @endforeach
    </ul>
</div>
@endif
<div class="card">
    <div class="card-header">
        Thêm sinh viên mới
    </div>
    <div class="card-body">
        <form method="post" action="{{ route('flowers.store') }}" enctype="multipart/form-data">
            @csrf
          
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Tên loài hoa</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" />
                </div>
            </div>
            
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">URL ảnh</label>
                <div class="col-sm-10">
                    <input type="text" id="image_url"name="image_url" class="form-control" />
                </div>
            </div>
            <div class="row mb-4">
                <label class="col-sm-2 col-label-form">Mô tả</label>
                <div class="col-sm-10">
                    <input type="text" id="description"name="description" class="form-control" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Thời gian tạo</label>
                <div class="col-sm-10">
                    <input type="datetime-local" name="created_at" class="form-control" value="{{ date('Y-m-d\TH:i:s') }}" readonly />
                </div>
                
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Thời gian cập nhật</label>
                <div class="col-sm-10">
                    <input type="datetime-local" name="updated_at" class="form-control" value="{{ date('Y-m-d\TH:i:s') }}" readonly/>
                </div>
            </div>
           
            <div class="text-center">
                <input type="submit" value="Thêm" class="btn btn-primary">
                <a href="{{route('flowers.index')}}" class="btn btn-secondary">Quay lại</a>
                
            </div> 
        </form>
    </div>
</div>

@endsection
