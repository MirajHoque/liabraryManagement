@extends('pattern.master')
@section("content")
<h2 class="text-center bg-primary pt-3 pb-2">Antopolis liabrary</h2>

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-xl-6 col-md-6 col-sm-6 pr-5">
                <h3 pr-5 class="card-title">Borrow History</h3>
            </div>
            <div class="col-xl-6 col-md-6 col-sm-6 pl-5">
                <input type="text" name="search" id="" placeholder="search By User">
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
                    <th>Is Returned</th>
                    
                </tr>
            </thead>

            <tbody>

                @foreach ($bookIssued as $book)
                <tr>
                    <td>{{ $book->name }}</td>
                    <td>{{ $book->issueto }}</td>
                    <td>{{ $book->issuedate }}</td>
                    <td>{{ $book->returndate }}</td>
                    <td>
                        <div>
                        
                            <a href="" class="btn btn-success mr-2" onclick="return confirm('Book is not returned yet?')"><i class="fas fa-times"></i></a>
                            <a href="{{ url('/book/returned/'.$book->name) }}" class="btn btn-danger" onclick="return confirm('Book is returned?')"><i class="fas fa-check"></i></a>
                        </div>
                    </td>
                </tr>  
                @endforeach
                
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>

@endsection