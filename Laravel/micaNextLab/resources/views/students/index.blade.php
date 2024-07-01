@extends('students.master')

@section('content')
    @if($message = Session::get('success'))
        <div class="alert alert-success" id="success-alert">
            {{$message}}
        </div>
    @endif

    <div class="container mt-5">
        <h1 class="text-primary mt-3 mb-4 text-center"><b>Quản lý sinh viên</b></h1>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6 text-end">
                    <a href="{{ route('students.create') }}" class="btn btn-success btn-sm">Thêm sinh viên</a>
                    <a href="{{ route('types.index') }}" class="btn btn-success btn-sm ms-2">Loại sinh viên</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="table-success">
                        <tr>
                            <th scope="col">Mã sinh viên</th>
                            <th scope="col">Tên sinh viên</th>
                            <th scope="col">Ngày sinh</th>
                            <th scope="col">Giới tính</th>
                            <th scope="col">Loại sinh viên</th>
                            <th scope="col">Địa chỉ</th>
                            <th scope="col">Số điện thoại</th>
                            <th scope="col">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($students as $student)
                            <tr>
                                <td>{{ $student->StudentID }}</td>
                                <td>{{ $student->StudentName }}</td>
                                <td>{{ \Carbon\Carbon::parse($student->StudentBirthday)->format('d/m/Y') }}</td>
                                <td>{{ $student->StudentGender == 0 ? 'Nam' : 'Nữ' }}</td>
                                <td>{{ $student->Type->TypeName }}</td>
                                <td>{{ $student->StudentAddress }}</td>
                                <td>{{ $student->StudentPhoneNumber }}</td>
                                <td style="white-space: nowrap;">
                                    <a href="{{ route('students.show', $student->StudentID) }}" class="btn btn-secondary btn-sm"><i class="bi bi-eye"></i></a>
                                    <a href="{{ route('students.edit', $student->StudentID) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i></a>
                                    <button type="button" class="btn btn-danger btn-sm " data-bs-toggle="modal" data-bs-target="#deleteModal{{ $student->StudentID }}">
                                        <i class="bi bi-trash3-fill"></i>
                                    </button>
                                </td>
                            </tr>
                            <!-- Delete Confirmation Modal -->
                            <div class="modal fade" id="deleteModal{{ $student->StudentID }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-danger" id="exampleModalLabel">Thông báo</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Bạn có chắc chắn muốn xóa sinh viên có tên <b>{{ $student->StudentName }}</b> không?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                                            <form action="{{ route('students.destroy', $student->StudentID) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Xóa</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center">Không tìm thấy dữ liệu</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            {{ $students->links('pagination::bootstrap-5') }}
        </div>
    </div>
@endsection
