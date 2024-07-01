@extends('students.master')
@section('content')
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-6">
                <b>
                    Thôn tin  sinh viên chi tiết
                </b>
            </div>
            <div class="col col-md-6">
                <a href="{{ route('students.index') }}" class="btn btn-primary btn-sm float-end">
                    Xem tất cả danh sách
                </a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Tên sinh viên</b></label>
            <div class="col-sm-10">
                {{ $student->StudentName }}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Ngày sinh</b></label>
            <div class="col-sm-10">
                {{ date('d/m/Y', strtotime($student->StudentBirthday)) }}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Giới tính</b></label>
            <div class="col-sm-10">
                @if($student->StudentGender == 0)
                    Nam
                @else
                    Nữ
                @endif
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Số điện thoại</b></label>
            <div class="col-sm-10">
                {{ $student->StudentPhoneNumber }}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Loại sinh viên</b></label>
            <div class="col-sm-10">

            {{ $type->TypeName }} - {{ $type->TypeDescription }}
            </div>
        </div>
        
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Địa chỉ</b></label>
            <div class="col-sm-10">
                {{ $student->StudentAddress }}
            </div>
        </div>
        <a href="{{ route('students.index') }}" class="btn btn-secondary">Quay lai</a>
    </div>
</div>
@endsection
