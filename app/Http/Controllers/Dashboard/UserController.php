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

class UserController extends BaseController
{
    private UserRepositoryInterface $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function store(UserCreateRequest $request)
    {

        $data = $request -> validated();
        $user = User::create($data);
        return $this->success($user, 'product Created Successfully', 200);
    }
    public function show(string $id)
    {
        $data = User::find($id);
        if (!$data) {
            return $this->error('user Not Found!', null, 404);
            
        }
        return $this->success($data, 'User Show successfully', 200);
    }
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|string',
            'phone' => 'required|string',
            'address' => 'reuired|string',  
        ]);
        if ($validator->fails()) {
            return $this->error('Validation Error', $validator->errors());
        }
        
        $User = User::find($id);
        if(!$User) {
            return $this->error("User not Found!", null, 404);
        }
        $User->update($request->all());
        return $this->success($User, 'User Updated Successfully', 200);
    }
}
