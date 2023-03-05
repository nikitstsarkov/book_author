@extends('layouts.main')
@section('content')
    <div>
        <form action="{{route('book.update', $book->id)}}" method="post">
            @csrf
            @method('patch')
            <div class="form-group">
                <label for="book">Book</label>
                <input type="text" name="title" class="form-control" id="book" placeholder="Book" value="{{ $book->title }}">
            </div>
            <div class="form-group">
                <label for="Author">Author</label>
                <select class="form-select" name="author">
                    @foreach ($authors as $author)
                        <option value="{{ $author->id}}" @if ($author->id === $book->author[0]->id) selected @endif>{{ $author->title }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection

