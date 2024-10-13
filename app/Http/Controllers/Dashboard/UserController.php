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
        $User = User::find($id);
        if (!$User) {
            return $this->sendError("User not Found!", null, 404);
        }
    
        $hasRole = $User->roles()->whereHas('roles', function($query) use ($request) {
            $query->where('id', $request->role_id); 
        })->exists();
    
        if ($hasRole) {
            $data = $request->validated(); 
            
            if (!empty($data['password'])) {
                $data['password'] = bcrypt($data['password']);
            }
            
           
            $User->update($data);
    
            return $this->sendResponse([], "User Updated Successfully", 200);
        } else {
            return $this->sendError("User does not have the required role", 403);
        }
    }
    
}
