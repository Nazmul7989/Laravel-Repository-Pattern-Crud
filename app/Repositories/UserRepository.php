<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\Interfaces\UserRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;


class UserRepository implements UserRepositoryInterface {

    private $model;

    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function index(Request $request) : Collection
    {
        return $this->model->get();
    }

    public function create() : User
    {

    }

    public function store(Request $request) : User
    {

    }

    public function edit($id) : User
    {

    }

    public function update(Request $request,$id) : User
    {

    }

    public function destroy($id) : bool
    {

    }


}
