@extends('flowers.master')

@section('content')
    @if($message = Session::get('success'))
        <div class="alert alert-success" id="success-alert">
            {{$message}}
        </div>
    @endif

    <div class="container mt-5">
        <h1 class="text-primary mt-3 mb-4 text-center"><b>Quản lý loài hoa</b></h1>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6 text-end">
                    <a href="{{ route('flowers.create') }}" class="btn btn-success btn-sm">Thêm loài hoa</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="table-success">
                        <tr>
                            <th scope="col">Mã loài hoa</th>
                            <th scope="col">Tên loài hoa</th>
                            <th scope="col">URL ảnh</th>
                            <!-- <th scope="col">Khu vực</th> -->
                            <th scope="col">Mô tả</th>
                            <th scope="col">Thời gian tạo</th>
                            <th scope="col">Thời gian sửa</th>
                            <th scope="col">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($flowers as $flower)
                            <tr>
                                <td>{{ $flower->id }}</td>
                                <td>{{ $flower->name }}</td>
                                <td><img src="{{ $flower->image_url }}" alt="Ảnh loài hoa" style="max-width: 100px; max-height: 100px;"></td>
                                <!-- <td>
                                    @foreach($flower->regions as $region)
                                        {{ $region->region_name }}
                                        @if (!$loop->last), @endif
                                    @endforeach
                                </td> -->
                                <td>{{ $flower->description }}</td>
                                <td>{{ \Carbon\Carbon::parse($flower->created_at)->format('d/m/Y H:i:s') }}</td>
                                <td>{{ \Carbon\Carbon::parse($flower->updated_at)->format('d/m/Y H:i:s') }}</td>
        
                                <td style="white-space: nowrap;">
                                    <a href="{{ route('flowers.show', $flower->id) }}" class="btn btn-secondary btn-sm">
                                        <!-- <i class="bi bi-eye"></i> -->
                                         Xem
                                    </a>
                                    <a href="{{ route('flowers.edit', $flower->id) }}" class="btn btn-primary btn-sm">
                                        <!-- <i class="bi bi-pencil-square"></i> -->
                                         Sửa
                                    </a>
                                    <button type="button" class="btn btn-danger btn-sm " data-bs-toggle="modal" data-bs-target="#deleteModal{{ $flower->id }}">
                                        <!-- <i class="bi bi-toggles2"></i> -->
                                         Xóa
                                    </button>
                                </td>
                            </tr>
                            <!-- Delete Confirmation Modal -->
                            @include('flowers.delete')

                        @empty
                            <tr>
                                <td colspan="8" class="text-center">Không tìm thấy dữ liệu</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            {{ $flowers->links('pagination::bootstrap-5') }}
        </div>
    </div>
@endsection
