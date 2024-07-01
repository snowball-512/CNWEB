<!-- index.blade.php -->
@extends('layouts.app')
@section('title', 'Danh Sách Books')
@section('content')
    <div class="container">
        <h1 style="color: green;">Danh Sách Books</h1>
        <div class="table-responsive"> <!-- Để bảng có khả năng cuộn trên các thiết bị nhỏ -->
            <table class="table table-striped table-bordered" id="book_table"> <!-- Thêm lớp table-striped để có các hàng xen kẽ được tô màu -->
                <thead class="thead-dark"> <!-- Thêm lớp thead-dark để có nền màu đậm cho phần tiêu đề -->
                    <tr>
                        <th scope="col">Mã sách</th> <!-- Sử dụng scope="col" để chỉ định cột này là phần tiêu đề của bảng -->
                        <th scope="col">Tên sách</th>
                        <th scope="col">Tác giả</th>
                        <th scope="col">Thể loại</th>
                        <th scope="col">Mô tả</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $book->tensach }}</td>
                        <td>{{ $book->tacgia }}</td>
                        <td>{{ $book->theloai }}</td>
                        <td>{{ $book->mota }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
