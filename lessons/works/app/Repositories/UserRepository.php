<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\Interfaces\userRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{


    public function create(array $data): User
    {
        return User::create($data);
    }

    public function findbyEmail(string $email): ?User
    {
        return User::where('email', $email)->first();
    }
}
