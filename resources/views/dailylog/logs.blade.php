@extends('layouts.main')
@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h3>
            Logs
        </h3>
        <a role="button" class="btn btn-primary" href="{{ route('log.create') }}">Add Log</a>
    </div>
    @if ($data != null)
        <table class="table table-hover">
            <thead class="table-light">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Log</th>
                    <th scope="col">Status</th>
                    <th scope="col">Role</th>
                    <th scope="col">Time</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @php($counter = 1)
                @foreach ($data as $d)
                    <tr>
                        <th scope="row">{{ $counter++ }}</th>
                        <td>{{ $d->name }}</td>
                        <td>{{ Str::of($d->content)->limit(70) }}</td>
                        <td>
                            @if ($d->status == 'Pending')
                                <span class="badge text-bg-warning">{{ $d->status }}</span>
                            @else
                                @if ($d->status == 'Accepted')
                                    <span class="badge text-bg-success">{{ $d->status }}</span>
                                @else
                                    <span class="badge text-bg-danger">{{ $d->status }}</span>
                                @endif
                            @endif
                        </td>
                        <td>{{ $d->role }}</td>
                        <td>{{ $d->updated_at }}</td>
                        <td><a href="{{ route('log.show', $d->id) }}">Show</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div>Tidak ada logs</div>
    @endif
@endsection
