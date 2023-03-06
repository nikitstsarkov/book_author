@extends('layouts.main')
@section('content')
    <div>
        <a href="{{ route('author.create') }}" class="btn btn-primary mb-3"> Add one</a>
    </div>
    <div>
        @foreach($authors as $author)
            <div><a href="{{ route('author.view', $author->id) }}">{{ $author->id }}. {{ $author->title }}</a></div>
        @endforeach
    </div>
@endsection

