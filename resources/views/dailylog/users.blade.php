@extends('layouts.main')
@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h3>
            User List
        </h3>
    </div>
    <table class="table table-hover">
        <thead class="table-light">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Role</th>
            </tr>
        </thead>
        <tbody>
            @php($counter = 1)
            @foreach ($data as $d)
                <tr>
                    <th scope="row">{{ $counter++ }}</th>
                    <td>{{ $d->name }}</td>
                    <td>{{ $d->role }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
