<!-- @extends('students.master') -->
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
        Thêm loại sinh viên mới
    </div>
    <div class="card-body">
        <form method="post" action="{{ route('types.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Tên loại sinh viên</label>
                <div class="col-sm-10">
                    <input type="text" name="TypeName" class="form-control" />
                </div>
            </div>
            
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Mô tả </label>
                <div class="col-sm-10">
                    <input type="text" name="TypeDescription" class="form-control" />
                </div>
            </div>
           
            
            <div class="text-center">
                <a href="{{route('students.index')}}" class="btn btn-secondary">Quay lại</a>
                <input type="submit" value="Thêm" class="btn btn-primary">
            </div>
        </form>
            
</div>
@endsection
