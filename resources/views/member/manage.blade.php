@extends('pattern.master')
@section("content")
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-xl-6 col-md-6 col-sm-6">
                <h3 class="card-title">Members List</h3>
            </div>
            <div class="col-xl-6 col-md-6 col-sm-6 text-right">
                <a href="{{ route('member.register') }}" class="btn btn-sm btn-primary">Register Member</a>
            </div>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">


        @if(session()->has('member_delete'))
            <div class="alert alert-success">
                {{ session()->get('member_delete') }}
            </div>
        @endif


        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                    
                </tr>
            </thead>

            <tbody>

                @foreach ($members as $member)
                <tr>
                    <td>{{ $member->name }}</td>
                    <td>{{ $member->email }}</td>
                    <td>
                        <div>
                        
                            <a href="{{ url('member/edit/'.$member->id) }}" class="btn btn-success mr-2"><i class="fas fa-edit"></i></a>
                            <a href="{{ url('/member/delete/'.$member->id) }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?')"><i class="fas fa-trash-alt"></i></a>
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