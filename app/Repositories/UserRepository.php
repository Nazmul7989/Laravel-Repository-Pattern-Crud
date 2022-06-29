<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\Exceptions\UserCreateException;
use App\Repositories\Exceptions\UserErrorException;
use App\Repositories\Exceptions\UserNotFoundException;
use App\Repositories\Exceptions\UserUpdateException;
use App\Repositories\Interfaces\UserRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;


class UserRepository implements UserRepositoryInterface {

    private $model;

    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function index(Request $request) : Collection
    {
        try {
            return $this->model->get();
        } catch (\ErrorException $exception){
            throw new UserErrorException($exception->getMessage(),500);
        }
    }

    public function create() : User
    {

    }

    public function store(Request $request) : User
    {
        try {
            $this->model->name       = $request->name;
            $this->model->phone      = $request->phone;
            $this->model->email      = $request->email;
            $this->model->password   = Hash::make($request->email);
            $this->model->address     = $request->address;
            $this->model->save();

            return $this->model;

        } catch (\ErrorException $exception){
            throw new UserCreateException($exception->getMessage(),500);
        }
    }

    public function edit($id) : User
    {
        try {
            return $this->model->findOrFail($id);
        } catch (\ErrorException $exception){
            throw new UserNotFoundException("User Not Found",404);
        }

    }

    public function update(Request $request,$id) : User
    {
        try {
            $user = $this->edit($id);

            $user->name       = $request->name;
            $user->phone      = $request->phone;
            $user->email      = $request->email;
            $user->address    = $request->address;
            $user->save();

            return $user;
        } catch (\ErrorException $exception){
            throw new UserUpdateException($exception->getMessage(),500);
        }
    }

    public function destroy(User $user) : bool
    {
        try {
            return $user->delete();
        } catch (\ErrorException $exception){
            throw new UserErrorException($exception->getMessage(),500);
        }
    }


}
