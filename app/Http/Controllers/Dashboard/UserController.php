<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserCreateRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Repositories\User\UserRepositoryInterface;
use Illuminate\Http\Request;
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
    public function show()
    {
        $user = $this->userRepository->show();
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

    public function update(UserCreateRequest $request, string $id)
    {
        // dd($request->role_id);
        // Validation
        // $validator = Validator::make($request->all(), []);

        // if ($validator->fails()) {
        //     return $this->sendError('Validation Error', $validator->errors());
        // }

        $data = $request->validated();

        $User = User::find($id);
        if (!$User) {
            return $this->sendError("User not Found!", null, 404);
        }

        if ($request->role_id) {
            $role = Role::find($request->role_id);
            // dd($role);
            $User->syncRoles([$role->name]);
        }

        $User->update($data);

        return $this->sendResponse($User, 'User Updated Successfully', 200);
    }
}
