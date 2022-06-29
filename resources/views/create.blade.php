@extends('index')
@section('content')
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-6">
                <div class="card shadow-sm px-4 py-4">
                    <div class="card-body">
                        <div class="clearfix">
                            <h3 class="text-center text-success float-start">Create New User</h3>
                            <a href="{{ route('user.index') }}" class="btn btn-sm btn-success float-end">User List</a>
                        </div>
                        <hr>
{{--                        @if ($errors->any())--}}
{{--                            <div class="alert alert-danger">--}}
{{--                                <ul>--}}
{{--                                    @foreach ($errors->all() as $error)--}}
{{--                                        <li>{{ $error }}</li>--}}
{{--                                    @endforeach--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        @endif--}}
                        <form action="{{ route('user.store') }}" method="post">
                            @csrf

                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">
                                <div style='color:red; padding: 0 5px;'>{{($errors->has('name'))?($errors->first('name')):''}}</div>

                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                                <div style='color:red; padding: 0 5px;'>{{($errors->has('email'))?($errors->first('email')):''}}</div>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}">
                                <div style='color:red; padding: 0 5px;'>{{($errors->has('phone'))?($errors->first('phone')):''}}</div>
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" value="{{ old('password') }}">
                                <div style='color:red; padding: 0 5px;'>{{($errors->has('password'))?($errors->first('password')):''}}</div>
                            </div>

                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <textarea name="address" id="address" class="form-control" cols="30" rows="4">{{ old('address') }}</textarea>
                                <div style='color:red; padding: 0 5px;'>{{($errors->has('address'))?($errors->first('address')):''}}</div>
                            </div>
                            <button type="submit" class="btn btn-sm btn-success">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
