@extends('layouts.main')
@section('content')
    <div>
        <h3 class="mb-3">{{ $data[0]->name }} | {{ $data[0]->updated_at }}</h3>
        <div class="mb-3">
            @if ($data[0]->status == 'Pending')
                <span class="badge text-bg-warning">{{ $data[0]->status }}</span>
            @else
                @if ($data[0]->status == 'Accepted')
                    <span class="badge text-bg-success">{{ $data[0]->status }}</span>
                @else
                    <span class="badge text-bg-danger">{{ $data[0]->status }}</span>
                @endif
            @endif
        </div>
        <p>{{ $data[0]->content }}</p>
        @if ($data[0]->status == 'Pending')
            <div class="mb-3 d-flex" style="gap: 8px">
                <form action="{{ route('accept', $data[0]->id) }}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-success">Accept</button>
                </form>
                <form action="{{ route('reject', $data[0]->id) }}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-danger">Reject</button>
                </form>
            </div>
        @endif
    </div>
@endsection
