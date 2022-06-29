<?php

namespace App\Http\Controllers;

use App\Http\Requests\Users\UserCreateRequest;
use App\Http\Requests\Users\UserUpdateRequest;
use App\Repositories\Exceptions\UserErrorException;
use App\Repositories\Interfaces\UserRepositoryInterface;
use Illuminate\Http\Request;

class  UserController extends Controller
{
    private $userRepo;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepo = $userRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        try {
            $users = $this->userRepo->index($request);
            return view('user',compact('users'));
        } catch (\ErrorException $exception){
            throw new UserErrorException($exception->getMessage(),$exception->getCode());
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try {
            return view('create');
        } catch (\ErrorException $exception){
            throw new UserErrorException($exception->getMessage(),$exception->getCode());
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request)
    {
        try {
            $this->userRepo->store($request);
            return redirect()->route('user.index');
        } catch (\ErrorException $exception){
            throw new UserErrorException($exception->getMessage(),$exception->getCode());
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $user = $this->userRepo->edit($id);
            return view('edit',compact('user'));
        } catch (\ErrorException $exception){
            throw new UserErrorException($exception->getMessage(),$exception->getCode());
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {
        try {
            $this->userRepo->update($request,$id);
            return redirect()->route('user.index');
        } catch (\ErrorException $exception){
            throw new UserErrorException($exception->getMessage(),$exception->getCode());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $user = $this->userRepo->edit($id);
            $this->userRepo->destroy($user);
            return redirect()->back();

        } catch (\ErrorException $exception){
            throw new UserErrorException($exception->getMessage(),$exception->getCode());
        }
    }
}
