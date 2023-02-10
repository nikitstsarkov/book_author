@extends('layouts.main')
@section('content')
    <div>
        <form action="{{route('book.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="book">Book</label>
                <input type="text" name="books" class="form-control" id="book" placeholder="Book">
            </div>
            <div class="form-group">
                <label for="Author">Author</label>
                <input type="text" name="author" class="form-control" id="Author" placeholder="Author">
            </div>
            <div class="form-group">
                <label for="Description">Description</label>
                <input type="text" name="description" class="form-control" id="Description" placeholder="Description">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection

