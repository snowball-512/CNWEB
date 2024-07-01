@extends('students.master')
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
        <form method="post" action="{{ route('students.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <label for="TypesID" class="col-sm-2 col-label-form">Chọn loại sinh viên</label>
                <div class="col-sm-10">
                    <select id="TypesID" name="TypesID" class="form-select" required>
                        @foreach($types as $type)
                        <option value="{{$type->TypesID}}">{{$type->TypeName}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Tên sinh viên</label>
                <div class="col-sm-10">
                    <input type="text" name="StudentName" class="form-control" />
                </div>
            </div>
            
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Ngày sinh</label>
                <div class="col-sm-10">
                    <input type="date" id="studentBirthday"name="StudentBirthday" class="form-control" />
                </div>
            </div>
            <div class="row mb-4">
                <label class="col-sm-2 col-label-form">Giới tính</label>
                <div class="col-sm-10">
                    <select type="text" name="StudentGender" class="form-control">
                        <option value="0">Nam</option>
                        <option value="1">Nữ</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Địa chỉ</label>
                <div class="col-sm-10">
                    <input type="text" name="StudentAddress" class="form-control" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Số điện thoại</label>
                <div class="col-sm-10">
                    <input type="phone" name="StudentPhoneNumber" class="form-control" />
                </div>
            </div>
            
            <div class="text-center">
                <a href="{{route('students.index')}}" class="btn btn-secondary">Quay lại</a>
                <input type="submit" value="Thêm" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>

@endsection
