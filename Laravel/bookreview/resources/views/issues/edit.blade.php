@extends('books.master')
@section('content')
<div class="card">
    <div class="card-header">Sửa thông tin loài hoa</div>
    <div class="card-body">
        <form action="{{ route('books.update', $book->BookID) }}" method="post" enctype="multipart/form-data">
            @csrf 
            @method('PUT')
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-label-form">Tên sách</label>
                <div class="col-sm-10">
                    <input type="text" name="Title" class="form-control" value="{{ $book->Title }}" id="">
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-label-form">Tác giả</label>
                <div class="col-sm-10">
                    <input type="text" name="Author" class="form-control" value="{{ $book->Author }}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-label-form">Thể loại</label>
                <div class="col-sm-10">
                    <input type="text" name="Genre" class="form-control" value="{{ $book->Genre }}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-label-form">Năm xuất bản </label>
                <div class="col-sm-10">
                    <input type="number" name="PubilicationYear" class="form-control"value="{{ $book->PubilicationYear }}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-label-form">ISBN </label>
                <div class="col-sm-10">
                    <input type="text" name="ISBN" class="form-control"value="{{ $book->ISBN }}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-label-form">CoverImageURL </label>
                <div class="col-sm-10">
                    <input type="text" name="CoverImageURL" class="form-control"value="{{ $book->CoverImageURL }}">
                </div>
            </div>
            <div class="text-center">
                <input type="hidden" name="hidden_id" value="{{ $book->BookID }}"/>
                <input type="submit" class="btn btn-primary" value="Cập nhật"/>
                <a href="{{ route('books.index') }}" class="btn btn-secondary">Quay lại</a>
                
            </div>
        </form>
    </div>
</div>



@endsection
