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
                            <tr>
                                <th scope="row">1</th>
                                <td>Md Nazmul Hasan</td>
                                <td>nazmul@gmail.com</td>
                                <td>0193237283</td>
                                <td>Jhenaidah,Bangladesh</td>
                                <td>
                                    <button class="btn btn-sm btn-success">Edit</button>
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Md Razib Hasan</td>
                                <td>razib@gmail.com</td>
                                <td>0173343345</td>
                                <td>Dhaka,Bangladesh</td>
                                <td>
                                    <button class="btn btn-sm btn-success">Edit</button>
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
