@extends('layouts.main')
@section('content')
    <div>
            @foreach($books as $book)
                <div>{{ $book->id }}. {{ $book->books }}  {{ $book->author }}</div>
            @endforeach
    </div>
@endsection

