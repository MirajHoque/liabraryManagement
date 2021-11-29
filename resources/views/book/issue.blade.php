@extends('pattern.master')
@section("content")

<div class="container custom-logIn">
    <div class="row justify-content-center">
        <div class="col-sm-4 pl-3 pr-3">
            <form action="issued" method="POST">
                @csrf
                <div class="form-group">
                    <select name="name" id="">
                        <option value="" selected disabled>Chose a Book</option>
                        @foreach ($books as $book)
                        <option value="{{ $book->name }}">{{ $book->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="member">Issue to</label>
                    <input type="text" name="issueto" class="form-control" aria-describedby="emailHelp" placeholder="Please Enter Member Name" required>
                </div>
                <div class="form-group">
                    <label for="issuedate">Issue Date</label>
                    <input type="text" name="issuedate" class="form-control" aria-describedby="emailHelp" placeholder="Enter Today's Date" required>
                </div>
                <div class="form-group">
                    <label for="returndate">Return Date</label>
                    <input type="text" name="returndate" class="form-control" placeholder="Enter Return Date" required>
                </div>
                <button type="submit" class="btn btn-primary">Issue</button>
            </form>
        </div>
    </div>
</div>

@endsection