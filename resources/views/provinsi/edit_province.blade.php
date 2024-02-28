@extends('layouts.main')
@section('content')
    <h3>Update Province</h3>
    <form action="{{ route('provinsi.update', $data->id) }}" method="post">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Nama Provinsi</label>
            <input class="form-control" @error('name') style="border: 1px solid rgb(255, 0, 0)" @enderror id="name"
                name="name" value="{{ old('name', $data->name) }}">
            @error('name')
                <small style="color: #dc3545">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Latitude</label>
            <input class="form-control" @error('latitude') style="border: 1px solid rgb(255, 0, 0)" @enderror"
                id="latitude" name="latitude" value="{{ old('latitude', $data->latitude) }}">
            @error('latitude')
                <small style="color: #dc3545">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Longitude</label>
            <input class="form-control" @error('longitude') style="border: 1px solid rgb(255, 0, 0)" @enderror"
                id="longitude" name="longitude" value="{{ old('longitude', $data->longitude) }}">
            @error('longitude')
                <small style="color: #dc3545">{{ $message }}</small>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary mb-3">Submit</button>
    </form>
@endsection
