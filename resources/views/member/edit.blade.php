@extends('pattern.master')
@section("content")
<div class="container custom-logIn">
    <div class="row justify-content-center">
        <div class="col-sm-4 pl-3 pr-3">
            <form action="{{ url('member/updated/'.$member->id)}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="userName">User Name</label>
                    <input type="text" name="userName" class="form-control" aria-describedby="userName" value="{{ $member->name }}" required>
                </div>
                <div class="form-group">
                    <label for="Email1">Email address</label>
                    <input type="email" name="email" class="form-control" aria-describedby="emailHelp" value="{{ $member->email }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>

@endsection