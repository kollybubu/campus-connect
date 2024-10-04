<?php

namespace App\Repositories\User;

use App\Models\User;
use Spatie\Permission\Models\Role;
use App\Repositories\User\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface {
    public function index($role)
    {
        $users = User::role($role)->get();
        return $users;
    }

    public function store($data)
    {
        $user = User::create($data);
        $role = Role::findOrFail($data['role_id']);
        $user->assignRole($role->name);
        return $user;
    }
}