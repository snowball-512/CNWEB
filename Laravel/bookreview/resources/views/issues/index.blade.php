@extends('issues.master')

@section('content')
    @if($message = Session::get('success'))
        <div class="alert alert-success" id="success-alert">
            {{$message}}
        </div>
    @endif

    <div class="container mt-5">
        <h1 class="text-primary mt-3 mb-4 text-center"><b>Manage issues</b></h1>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6 text-end">
                    <a href="{{ route('issues.create') }}" class="btn btn-success btn-sm">Add issue</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="table-success">
                        <tr><th scope="col">ID</th>
                            <th scope="col">Computer Name</th>
                            <th scope="col">Reported By</th>
                            <th scope="col">Reported Date</th>
                            <th scope="col">Desc</th>
                            <th scope="col">Urgency</th>
                            <th scope="col">Status</th>
                            <th scope="col">Edit and delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($issues as $issue)
                            <tr>
                                <td>{{ $issue->id }}</td>
                                <td>{{ $issue->Computer->computer_name }}</td>
                                <td>{{ $issue->reported_by }}</td>
                                <td>{{ $issue->reported_date }}</td>
                                <td>{{ $issue->description }}</td>
                                <td>{{ $issue->urgency }}</td>
                                <td>{{ $issue->status }}</td>
                               
                                <td style="white-space: nowrap;">
                                    <a href="{{ route('issues.show', $issue->id) }}" class="btn btn-secondary btn-sm">
                                        <!-- <i class="bi bi-eye"></i> -->
                                         Watch 
                                    </a>
                                    
                                    <button type="button" class="btn btn-danger btn-sm " data-bs-toggle="modal" data-bs-target="#deleteModal{{ $issue->id }}">
                                        <!-- <i class="bi bi-toggles2"></i> -->
                                         Delete



                                         <i class="fa-solid fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <!-- Delete Confirmation Modal -->
                            <div class="modal fade" id="deleteModal{{ $issue->id  }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-danger" id="exampleModalLabel">Allert</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure <b class="text-danger">{{ $issue->computer_name }}</b> >
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                            <form action="{{ route('issues.destroy', $issue->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @empty
                            <tr>
                                <td colspan="8" class="text-center">No data</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            {{ $issues->links('vendor.pagination.bootstrap-4') }}

        </div>
    </div>
@endsection
