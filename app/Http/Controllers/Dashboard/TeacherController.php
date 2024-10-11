<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Repositories\User\UserRepositoryInterface;
use Illuminate\Support\Facades\DB;

class TeacherController extends BaseController
{
    private UserRepositoryInterface $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        $teachers = $this->userRepository->index('faculty');
        $teachers = UserResource::collection($teachers);
        return $this->sendResponse($teachers, 'Teachers Retrieved Successfully!');
    }
    public function listTeachers()
    {
        // $teachers = DB::table('users')
            // ->join('model_has_roles', 'users.id', '=', 'model_has_roles.model_id')
            // ->join('roles', 'model_has_roles.role_id', '=', 'roles.id')
            // ->where('roles.name', 'teacher')
            // ->where('model_has_roles.model_type', 'App\\Models\\User')
            //   ->select('users.id', 'users.name', 'users.email') 
            // ->get();
        $teachers = User::whereHas('roles', function($q){
            $q->where('id', 2);
        })->get();

        if ($teachers->isEmpty()) {
            return $this->sendResponse([], "No Teachers Found", 200);
        }

        $teachers = UserResource::collection($teachers);
        return $this->sendResponse($teachers, "Teacher List Retrieved Successfully", 200);
    }
}
