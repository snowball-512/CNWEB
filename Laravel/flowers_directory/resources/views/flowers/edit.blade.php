@extends('flowers.master')
@section('content')
<div class="card">
    <div class="card-header">Sửa thông tin loài hoa</div>
    <div class="card-body">
        <form action="{{ route('flowers.update', $flower->id) }}" method="post" enctype="multipart/form-data">
            @csrf 
            @method('PUT')
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-label-form">Tên loài hoa</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" value="{{ $flower->name }}" id="">
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-label-form">URL ảnh</label>
                <div class="col-sm-10">
                    <input type="text" name="image_url" class="form-control" value="{{ $flower->image_url }}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-label-form">Mô tả</label>
                <div class="col-sm-10">
                    <input type="text" name="description" class="form-control" value="{{ $flower->description }}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-label-form">Thời gian cập nhật </label>
                <div class="col-sm-10">
                    <input type="datetime-local" name="updated_at" class="form-control" id="currentDateTime" readonly>
                </div>
            </div>
        
            <div class="text-center">
                <input type="hidden" name="hidden_id" value="{{ $flower->id }}"/>
                <input type="submit" class="btn btn-primary" value="Cập nhật"/>
                <a href="{{ route('flowers.index') }}" class="btn btn-secondary">Quay lại</a>
                
            </div>
        </form>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Tạo một đối tượng Date
        var currentDateTime = new Date();
        
        // Cộng thêm múi giờ của Việt Nam (GMT+7)
        currentDateTime.setHours(currentDateTime.getHours() + 7);
        
        // Format lại thành chuỗi ISO (YYYY-MM-DDTHH:mm)
        var formattedDateTime = currentDateTime.toISOString().slice(0, 16);
        
        // Gán giá trị vào phần tử HTML có id là "currentDateTime"
        document.getElementById("currentDateTime").value = formattedDateTime;
    });
</script>


@endsection
