@extends('pattern.master')
@section("content")

<div class="container custom-logIn">
    <div class="row justify-content-center">
        <div class="col-sm-4 pl-3 pr-3">
            <form action="bookegistration" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" aria-describedby="userName" placeholder="Please Enter Name of the Book" required>
                </div>
                <div class="form-group">
                    <label for="author">Author</label>
                    <input type="text" name="author" class="form-control" aria-describedby="emailHelp" placeholder="Please Enter Author Name" required>
                </div>
                <button type="submit" class="btn btn-primary">Book Add</button>
            </form>
        </div>
    </div>
</div>

@endsection