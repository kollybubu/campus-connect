<?php

namespace App\Repositories\User;

interface UserRepositoryInterface {
    public function index($role);
    public function store($data);
}