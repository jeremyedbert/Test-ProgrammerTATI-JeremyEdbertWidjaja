@extends('layouts.main')
@section('content')
    <form action="{{ route('kinerja.check') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Hasil Kerja</label>
            <select class="form-select" name="hasil_kerja">
                <option selected value="0">Pilih Hasil Kerja</option>
                <option value="1">Di bawah ekspektasi</option>
                <option value="2">Sesuai ekspektasi</option>
                <option value="3">Di atas ekspektasi</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Perilaku</label>
            <select class="form-select" name="perilaku">
                <option selected value="0">Pilih Perilaku</option>
                <option value="1">Di bawah ekspektasi</option>
                <option value="2">Sesuai ekspektasi</option>
                <option value="3">Di atas ekspektasi</option>
            </select>
        </div>
        <div class="mb-3">
            <button class="btn btn-primary" type="submit">Cek Predikat Kinerja</button>
        </div>
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <b>Predikat Kinerja: </b>
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <b>Error! </b>
                {{ session('error') }}
            </div>
        @endif
    </form>
@endsection
