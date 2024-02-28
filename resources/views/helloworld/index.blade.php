@extends('layouts.main')
@section('content')
    <form action="{{ route('helloworld.check') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Enter a number</label>
            <input class="form-control" id="num" name="num">
        </div>
        <button type="submit" class="btn btn-primary mb-3">Print Result</button>
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <b>Result:</b>
                @foreach (session('success') as $value)
                    {{ $value }}
                @endforeach
            </div>
        @endif
    </form>

@endsection
