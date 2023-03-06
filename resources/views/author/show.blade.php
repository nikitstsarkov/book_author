@extends('layouts.main')
@section('content')
    <div>
                <div>{{ $author->id }}. {{ $author->title }}
                    @foreach ($book->author as $author)
                        {{ $author->title }}
                    @endforeach</div>
    </div>
    <div>
        <a href="{{ route('author.edit', $author->id) }}" class="btn btn-primary mb-3">Edit</a>
    </div>
    <div>
        <form action="{{ route('author.delete', $author->id) }}" method="post">
            @csrf
            @method('delete')
            <input type="submit"  class="btn btn-danger mb-3" value="Delete">
        </form>
    </div>
    <div>
        <a href="{{ route('author.view') }}" class="btn btn-primary mb-3">Back</a>
    </div>
@endsection

