@extends('layouts.main')
@section('content')
    <div>
        <form action="{{route('author.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="author">Author</label>
                <input type="text" name="title" class="form-control" id="author" placeholder="Author">
            </div>
            {{--<div class="form-group">
                <label for="Author">Author</label>
                <select class="form-select" name="author">
                    @foreach ($authors as $author)
                        <option value="{{ $author->id}}">{{ $author->title }}</option>
                    @endforeach
                </select>
            </div>--}}
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection

