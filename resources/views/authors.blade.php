@extends('layouts.main')
@section('content')
    <div>
        @foreach($authors as $author)
            <div><a href="{{ route('author.view', $author->id) }}">{{ $author->id }}. {{ $author->title }}</a></div>
        @endforeach
    </div>
@endsection

