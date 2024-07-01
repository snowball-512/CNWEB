@extends('students.master')

@section('content')
    @if($message = Session::get('success'))
        <div class="alert alert-success" id="success-alert">
            {{ $message }}
        </div>
    @endif

    <div class="container mt-5">
        <h1 class="text-primary mt-3 mb-4 text-center"><b>Quản lý loại sinh viên</b></h1>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6">
                    <a href="{{ route('types.create') }}" class="btn btn-success btn-sm float-end">Thêm loại sinh viên</a>
                    <a href="{{ route('students.index') }}" class="btn btn-success btn-sm float-end">Sinh viên</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Mã loại sinh viên</th>
                        <th>Tên loại sinh viên</th>
                        <th>Mô tả</th>
                        <td>Thao tác</td>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($types as $row)
                        <tr>
                            <td>{{ $row->TypesID }}</td>
                            <td>{{ $row->TypeName }}</td>
                            <td>{{ $row->TypeDescription }}</td>
                            <td>
                                <form action="{{route('types.destroy', $row->TypesID)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{route('types.show', $row->TypesID)}}" class="btn btn-primary">Xem</a>
                                    <a href="{{route('types.edit', $row->TypesID)}}" class="btn btn-warning">Sửa</a>
                                    <input type="submit" value="Xóa" class="btn btn-danger btn-sm">
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="3" class="text-center">Không tìm thấy dữ liệu</td></tr>
                    @endforelse
                </tbody>
            </table>
            {{ $types->links('pagination::bootstrap-5') }}
        </div>
    </div>
@endsection
