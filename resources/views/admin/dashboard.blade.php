@extends('pattern.master')
@section("content")
<h2 class="text-center bg-primary pt-3 pb-2">Antopolis liabrary</h2>

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-xl-6 col-md-6 col-sm-6">
                <h3 class="card-title">Books List</h3>
            </div>
            <div class="col-xl-6 col-md-6 col-sm-6 text-right">
                <a href="{{ route('book.register') }}" class="btn btn-sm btn-primary">Add Book</a>
            </div>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">


        @if(session()->has('book_delete'))
            <div class="alert alert-success">
                {{ session()->get('book_delete') }}
            </div>
        @endif


        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Author</th>
                    <th>Status</th>
                    <th>Actions</th>
                    
                </tr>
            </thead>

            <tbody>

                @foreach ($books as $book)
                <tr>
                    <td>{{ $book->name }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->status }}</td>
                    <td>
                        <div>
                        
                            <a href="{{ url('book/edit/'.$book->id) }}" class="btn btn-success mr-2"><i class="fas fa-edit"></i></a>
                            <a href="{{ url('/book/delete/'.$book->id) }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?')"><i class="fas fa-trash-alt"></i></a>
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