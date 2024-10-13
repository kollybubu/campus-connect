<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserCreateRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Repositories\User\UserRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;

class UserController extends BaseController
{
    private UserRepositoryInterface $userRepository;


    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    public function index()
    {
        $user = $this->userRepository->index();
        $user = UserResource::collection($user);
        return $this->sendResponse($user, 'user Retrived Successfully!');
    }
    public function show($id)
    {
        $user = $this->userRepository->show($id);
        $user = UserResource::collection($user);
        return $this->sendResponse($user, 'user Retrived Successfully!');
    }

    public function store(UserCreateRequest $request)
    {
        $role = Role::find($request->role_id);

        $data = $request->validated();

        $user = User::create($data);

        $user->syncRoles([$role->name]);

        return $this->sendResponse($user, 'product Created Successfully', 200);
    }
    public function update(Request $request, string $id)
    {
        $user = User::where('id',$id)->first();
        $role = Role::findOrFail($request->role_id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);
        $user->syncRoles($role->name);
        return $this->sendResponse($user, 'user updated successfully', 200);
    }
    
    
}
