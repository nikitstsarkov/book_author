@extends('layouts.main')
@section('content')
    <div>
                <div>{{ $book->id }}. {{ $book->books }}  {{ $book->author }}</div>
    </div>
    <div>
        <a href="{{ route('book.edit', $book->id) }}" class="btn btn-primary mb-3">Edit</a>
    </div>
    <div>
        <a href="{{ route('book.view') }}" class="btn btn-primary mb-3">Back</a>
    </div>
@endsection

