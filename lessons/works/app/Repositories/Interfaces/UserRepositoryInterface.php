<?php

namespace App\Repositories\Interfaces;

use App\Models\User;

interface userRepositoryInterface
{
    public function create(array $data): User;

    public function findbyEmail(string $email): ? User;
}
