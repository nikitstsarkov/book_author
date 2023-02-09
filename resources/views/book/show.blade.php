@extends('layouts.main')
@section('content')
    <div>
                <div>{{ $book->id }}. {{ $book->books }}  {{ $book->author }}</div>
    </div>
@endsection

