@extends('students.master')
@section('content')
@if($message = Session::get('success'))
<div class="alert alert-success">
    {{$message}}
</div>
@endif
<div class="container mt-5">
    <h1 class="text-primary mt-3 mb-4 text-center"><b>Quản lý sinh viên</b></h1>
</div>
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-6"><b></b></div>
            <div class="col col-md-6">
                <a href="{{ route('students.create') }}" class="btn btn-success btn-sm float-end">Create Student</a>
            </div>
        </div>  
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>Mã sinh viên</th>
                <th>Tên sinh viên</th>
                <th>Giới tính</th>
                <th>Địa chỉ Email</th>
                <th>Lớp</th>
                <th>Thao tác</th>
            </tr>
            @if(count($students) > 0)
                @foreach($students as $student)
                    <tr>
                        <td>{{ $student->StudentID }}</td>
                        <td>{{ $student->StudentName }}</td>
                        <td>@if($student->StudentGender == 0) Nam @else Nữ @endif</td>
                        <td>{{ $student->StudentEmail }}</td>
                        <td>{{ $student->ClassRoom->ClassRoomName }}</td>
                        <td>
                            <a href="{{ route('students.show', $student->StudentID) }}" class="btn btn-primary btn-sm"><i class="bi bi-eye"></i></a>
                            <a href="{{ route('students.edit', $student->StudentID) }}" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a>
                            <button type="button" class="btn btn-danger btn-sm fs-7" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $student->StudentID }}">
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
                            <div class="modal-body ">
                                Bạn có chắc chắn muốn xóa sinh viên có tên <b class="t">{{ $student->StudentName }}</b> không?
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

                @endforeach
            @else
                <tr>
                    <td colspan="6" class="text-center">No data found</td>
                </tr>
            @endif
        </table>
        <div class="pagination">
    {{ $students->links('pagination::bootstrap-5') }}
</div>
    </div>

</div>
@endsection

