@extends('issues.master')
@section('content')
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-6">
                <b>
                    Info issue
                </b>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Computer Name</b></label>
            <div class="col-sm-10">
            {{ $issue->Computer->computer_name }}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Reported By</b></label>
            <div class="col-sm-10">
            {{ $issue->reported_by }}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Reported Date</b></label>
            <div class="col-sm-10">
            {{ $issue->reported_date }}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Desc</b></label>
            <div class="col-sm-10">
            {{  $issue->description }}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Urgency</b></label>
            <div class="col-sm-10">
            {{ $issue->urgency }}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Status</b></label>
            <div class="col-sm-10">
            {{ $issue->status }}
            </div>
        </div>
        
        <a href="{{ route('issues.index') }}" class="btn btn-secondary">Back</a>
    </div>
</div>
@endsection
