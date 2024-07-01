@extends('students.master')
@section('content')
<div class="card">
    <div class="card-header">Sửa thông tin sinh viên</div>
    <div class="card-body">
        <form action="{{ route('students.update', $student->StudentID) }}" method="post" enctype="multipart/form-data">
            @csrf 
            @method('PUT')
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-label-form">Tên sinh viên</label>
                <div class="col-sm-10">
                    <input type="text" name="StudentName" class="form-control" value="{{ $student->StudentName }}" id="">
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-label-form">Ngày sinh</label>
                <div class="col-sm-10">
                    <input type="date" name="StudentBirthday" class="form-control" value="{{ $student->StudentBirthday }}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-label-form">Địa chỉ</label>
                <div class="col-sm-10">
                    <input type="text" name="StudentAddress" class="form-control" value="{{ $student->StudentAddress }}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-label-form">Số điện thoại</label>
                <div class="col-sm-10">
                    <input type="phone" name="StudentPhoneNumber" class="form-control" value="{{ $student->StudentPhoneNumber }}">
                </div>
            </div>
            <div class="row mb-4">
                <label for="" class="col-sm-2 col-label-form">Giới tính</label>
                <div class="col-sm-10">
                    <select name="StudentGender" class="form-control" id="">
                        <option value="0" {{ $student->StudentGender == 0 ? 'selected' : '' }}>Nam</option>
                        <option value="1" {{ $student->StudentGender == 1 ? 'selected' : '' }}>Nữ</option>
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <label for="TypesID" class="form-label">Loại sinh viên</label>
                <select name="TypesID" id="TypesID" class="form-select" required>
                    @foreach ($types as $type)
                        <option value="{{ $type->TypesID }}" {{ $type->TypesID == $student->TypesID ? 'selected' : '' }}>{{ $type->TypeName }}</option>
                    @endforeach
                </select>
            </div>
            <div class="text-center">
                <input type="hidden" name="hidden_id" value="{{ $student->StudentID }}"/>
                <a href="{{ route('students.index') }}" class="btn btn-secondary">Quay lại</a>
                <input type="submit" class="btn btn-primary" value="Sửa"/>
            </div>
        </form>
    </div>
</div>
<script>
    document.getElementsByName('StudentGender')[0].value = "{{ $student->StudentGender }}";
</script>

@endsection
