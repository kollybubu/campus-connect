<?php

namespace App\Repositories\User;

use App\Models\User;
use Spatie\Permission\Models\Role;
use App\Repositories\User\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface {
    public function index()
    {
        $users = User::with('roles')->latest()->get();
        return $users;
        
    }

    public function store($data)
    {
        $user = User::create($data);
        // $role = Role::findOrFail($data['role_id']);
        // $user->assignRole($role->name);
        $user->syncRoles($data['role_id']);
        return $user;
    }
    public function show($id){
        $User = user::where('id', $id)->first();
        $User = User::with('roles')->get();
        return $User;
    }
}