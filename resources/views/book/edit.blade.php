@extends('layouts.main')
@section('content')
    <div>
        <form action="{{route('book.update', $book->id)}}" method="post">
            @csrf
            @method('patch')
            <div class="form-group">
                <label for="book">Book</label>
                <input type="text" name="books" class="form-control" id="book" placeholder="Book" value="{{ $book->books }}">
            </div>
            <div class="form-group">
                <label for="Author">Author</label>
                <input type="text" name="author" class="form-control" id="Author" placeholder="Author" value="{{ $book->author }}">
            </div>
            <div class="form-group">
                <label for="Description">Description</label>
                <input type="text" name="description" class="form-control" id="Description" placeholder="Description" value="{{ $book->description }}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection

