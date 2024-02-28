@extends('layouts.main')
@section('content')
    <div>
        <h4>Provinsi {{ $data->name }}</h4>
        <p class="mb-1">Latitude: {{ $data->latitude }}</p>
        <p>Longitude: {{ $data->longitude }}</p>
        <div class="d-flex gap-3">
            <a role="button" class="btn btn-warning" href="{{ route('provinsi.edit', $data->id) }}">Edit Province</a>
            <button role="button" class="btn btn-danger" data-bs-toggle="modal"
                data-bs-target="#delete{{ $data->id }}">Delete Province</a>
        </div>
    </div>

    {{-- Modal Delete --}}
    <!-- Modal -->
    <div class="modal fade modal-dialog modal-dialog-centered" id="delete{{ $data->id }}" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi Penghapusan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Anda yakin untuk menghapus data <b>{{ $data->name }}</b>?
                </div>
                <div class="modal-footer">
                    <form action="{{ route('provinsi.destroy', $data) }}" method="post">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
