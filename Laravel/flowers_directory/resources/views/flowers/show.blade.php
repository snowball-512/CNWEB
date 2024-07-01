@extends('flowers.master')
@section('content')
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-6">
                <b>
                    Thôn tin chi tiết loài hoa
                </b>
            </div>
            <div class="col col-md-6">
                <a href="{{ route('flowers.index') }}" class="btn btn-primary btn-sm float-end">
                    Xem tất cả danh sách
                </a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Tên loài hoa</b></label>
            <div class="col-sm-10">
                {{ $flower->name }}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Ngày tạo</b></label>
            <div class="col-sm-10">
                {{ date('d/m/Y', strtotime($flower->created_at)) }}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Ngày cập nhật</b></label>
            <div class="col-sm-10">
                {{ date('d/m/Y', strtotime($flower->updated_at)) }}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Khu vực của loài hoa</b></label>
            <div class="col-sm-10">
            @foreach($flower->regions as $region)
                {{ $region->region_name }}
                @if (!$loop->last), @endif
            @endforeach
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Mô tả</b></label>
            <div class="col-sm-10">
                {{ $flower->description }}
            </div>
        </div>
        
        <a href="{{ route('flowers.index') }}" class="btn btn-secondary">Quay lai</a>
    </div>
</div>
@endsection
