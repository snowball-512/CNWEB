@extends('issues.master')
@section('content')
@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>
            {{$error}}
        </li>
        @endforeach
    </ul>
</div>
@endif
<div class="card">
    <div class="card-header">
        Add new issue
    </div>
    <div class="card-body">
        <form method="post" action="{{ route('issues.store') }}" enctype="multipart/form-data">
            @csrf
          
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Computer Name</label>
                <div class="col-sm-10">
                    <select name="computer_id" class="form-control">
                        @foreach($computers as $computer)
                            <option value="{{ $computer->id }}">{{ $computer->computer_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Reported By</label>
                <div class="col-sm-10">
                    <input type="text" id="reported_by"name="reported_by" class="form-control" />
                </div>
            </div>
            <div class="row mb-4">
                <label class="col-sm-2 col-label-form">Reported Date</label>
                <div class="col-sm-10">
                    <input type="date" id="reported_date"name="reported_date" class="form-control" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Desc</label>
                <div class="col-sm-10">
                    <input type="text" name="description" class="form-control" />
                </div>
            </div>
            <div class="row mb-4">
                <label class="col-sm-2 col-label-form">Urgency</label>
                <div class="col-sm-10">
                    <select type="text" name="urgency" class="form-control">
                        <option value="0">Low</option>
                        <option value="1">Medium</option>
                        <option value="1">High</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Status</label>
                <div class="col-sm-10">
                    <select type="text" name="status" class="form-control">
                        <option value="0">Open</option>
                        <option value="1">In Progress</option>
                        <option value="1">Resolved</option>
                    </select>
                </div>
            </div>
           
            <div class="text-center">
                <input type="submit" value="Add" class="btn btn-primary">
                <a href="{{route('issues.index')}}" class="btn btn-secondary">Back</a>
            </div> 
        </form>
    </div>
</div>

@endsection
