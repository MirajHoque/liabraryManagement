@extends('pattern.master')
@section("content")
<div class="container custom-logIn">
    <div class="row justify-content-center">
        <div class="col-sm-4 pl-3 pr-3">
            <form action="{{ url('book/updated/'.$book->id)}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Book Name</label>
                    <input type="text" name="name" class="form-control" aria-describedby="userName" value="{{ $book->name }}" required>
                </div>
                <div class="form-group">
                    <label for="author">Author</label>
                    <input type="text" name="author" class="form-control" aria-describedby="emailHelp" value="{{ $book->author }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>

@endsection