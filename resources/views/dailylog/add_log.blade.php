@extends('layouts.main')
@section('content')
    <h3>Add Log</h3>
    <form action="{{ route('log.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Log</label>
            <textarea class="form-control mb-3" id="exampleFormControlTextarea1" rows="3" name="content"></textarea>
            <button type="submit" class="btn btn-primary mb-3">Submit</button>
        </div>
    </form>
@endsection
