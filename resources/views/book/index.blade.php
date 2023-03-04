@extends('layouts.main')
@section('content')
    <div>
        <div>
            <a href="{{ route('book.create') }}" class="btn btn-primary mb-3"> Add one</a>
        </div>
            @foreach($books as $book)
                <div><a href="{{ route('book.show', $book->id) }}">{{ $book->id }}. {{ $book->title }} {{ optional($book->author)->title }}</a></div>
            @endforeach
    </div>
@endsection

