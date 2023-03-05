@extends('layouts.main')
@section('content')
    <div>
        <form action="{{route('book.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="book">Book</label>
                <input type="text" name="title" class="form-control" id="book" placeholder="Book">
            </div>
            <div class="form-group">
                <label for="Author">Author</label>
                <select class="form-select" name="author">
                    @foreach ($authors as $author)
                        <option value="{{ $author->id}}">{{ $author->title }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection

