<?php

namespace App\Repositories\Interfaces;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;


interface UserRepositoryInterface
{
    public function index(Request $request) : Collection;

    public function create() : User;

    public function store(Request $request) : User;

    public function edit($id) : User;

    public function update(Request $request, $id) : User;

    public function destroy(User $user) : bool;



}
