@extends('pattern.master')
@section("content")
<h2 class="text-center bg-primary pt-3 pb-2">Antopolis liabrary</h2>

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-xl-6 col-md-6 col-sm-6 pr-5">
                <h3 pr-5 class="card-title">Borrow History</h3>
            </div>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">




        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Issue To</th>
                    <th>Issue Date</th>
                    <th>Return Date</th>
                    
                </tr>
            </thead>

            <tbody>

                @foreach ($books as $book)
                <tr>
                    <td>{{ $book->name }}</td>
                    <td>{{ $book->issueto }}</td>
                    <td>{{ $book->issuedate }}</td>
                    <td>{{ $book->returndate }}</td>
                </tr>  
                @endforeach
                
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>

@endsection