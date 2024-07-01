<!-- index.blade.php -->
@extends('layouts.app')
@section('title', 'Danh Sách Categories')
@section('content')
    <div class="container">
        <h1 style="color: green;">Danh Sách Categories</h1>
        <div class="table-responsive"> <!-- Để bảng có khả năng cuộn trên các thiết bị nhỏ -->
            <table class="table table-striped table-bordered" id="categories_table"> <!-- Thêm lớp table-striped để có các hàng xen kẽ được tô màu -->
                <thead class="thead-dark"> <!-- Thêm lớp thead-dark để có nền màu đậm cho phần tiêu đề -->
                    <tr>
                        <th scope="col">Mã hàng</th> <!-- Sử dụng scope="col" để chỉ định cột này là phần tiêu đề của bảng -->
                        <th scope="col">Tên hàng</th>
                        <th scope="col">Mô tả</th>
                        <th scope="col">Xuất xứ</th>
                        <th scope="col">Năm sản xuất</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->description }}</td>
                        <td>{{ $category->origin }}</td>
                        <td>{{ $category->year }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
