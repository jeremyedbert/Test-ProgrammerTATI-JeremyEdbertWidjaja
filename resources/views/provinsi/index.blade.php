@extends('layouts.main')
@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h3>
            List of Provinces in Indonesia
        </h3>
        <a role="button" class="btn btn-primary" href="{{ route('provinsi.create') }}">Add Province</a>
    </div>
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show mb-3" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-light">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Province</th>
                <th scope="col">Latitude</th>
                <th scope="col">Longitude</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @php($counter = 1)
            @foreach ($data as $d)
                <tr>
                    <th scope="row">{{ $counter++ }}</th>
                    <td>{{ $d->name }}</td>
                    <td>{{ $d->latitude }}</td>
                    <td>{{ $d->longitude }}</td>
                    <td><a class="btn btn-info" href="{{ route('provinsi.show', $d->id) }}" role="button">Show</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
