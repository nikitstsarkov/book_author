@extends('layouts.main')
@section('content')
    <div>
        <form action="{{route('author.update', $author->id)}}" method="post">
            @csrf
            @method('patch')
            <div class="form-group">
                <label for="author">Author</label>
                <input type="text" name="title" class="form-control" id="author" placeholder="Author" value="{{ $author->title }}">
            </div>
            {{--<div class="form-group">
                <label for="Author">Author</label>
                <select class="form-select" name="author">
                    @foreach ($authors as $author)
                        <option value="{{ $author->id}}" @if ($author->id === $book->author[0]->id) selected @endif>{{ $author->title }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>--}}
@endsection

