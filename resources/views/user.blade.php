@extends('index')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="card shadow-sm px-4 py-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <div class="clearfix">
                                <h3 class="text-center text-success float-start">User Info Table</h3>
                                <a href="{{ route('user.create') }}" class="btn btn-sm btn-success float-end">Create User</a>
                            </div>
                            <hr>
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Address</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>{{ $user->address }}</td>
                                <td>
                                    <a href="{{ route('user.edit',$user->id) }}" class="btn btn-sm btn-success">Edit</a>
                                    <a href="{{ route('user.delete',$user->id) }}" onclick="return confirm('Do you want to Delete?')" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
