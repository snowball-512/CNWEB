@extends('students.master')
@section('content')
<div class="card">
    <div class="card-header">Sửa thông tin loại sinh viên</div>
    <div class="card-body">
        <form action="{{ route('types.update', $type->TypesID) }}" method="post" enctype="multipart/form-data">
            @csrf 
            @method('PUT')
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-label-form">Tên loại sinh viên</label>
                <div class="col-sm-10">
                    <input type="text" name="TypeName" class="form-control" value="{{ $type->TypeName }}" id="">
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-label-form">Mô tả loại</label>
                <div class="col-sm-10">
                    <input type="text" name="TypeDescription" class="form-control" value="{{ $type->TypeDescription }}">
                </div>
            </div>
        
            <div class="text-center">
                <input type="hidden" name="hidden_id" value="{{ $type->TypeID }}"/>
                <a href="{{ route('types.index') }}" class="btn btn-secondary">Quay lại</a>
                <input type="submit" class="btn btn-primary" value="Sửa"/>
            </div>
        </form>
    </div>
</div>

@endsection
