<!-- index.blade.php -->
@extends('layouts.app')
@section('title', 'Danh Sách tài liệu')
@section('content')
    <div class="container">
        <h1 style="color: green;">Danh Sách Tài liệu</h1>
        <div class="table-responsive"> <!-- Để bảng có khả năng cuộn trên các thiết bị nhỏ -->
            <table class="table table-striped table-bordered" id="book_table"> <!-- Thêm lớp table-striped để có các hàng xen kẽ được tô màu -->
                <thead class="thead-dark"> <!-- Thêm lớp thead-dark để có nền màu đậm cho phần tiêu đề -->
                    <tr>
                        <th scope="col">Mã tài liệu</th> <!-- Sử dụng scope="col" để chỉ định cột này là phần tiêu đề của bảng -->
                        <th scope="col">Tên tài liệu</th>
                        <th scope="col">Tác giả</th>
                        <th scope="col">Mô tả</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($documents as $document)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $document->tentailieu }}</td>
                        <td>{{ $document->tacgia }}</td>
                        <td>{{ $document->mota }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
