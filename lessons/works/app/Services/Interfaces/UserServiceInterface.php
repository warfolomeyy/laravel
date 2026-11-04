<?php

namespace App\Services\Interfaces;

use App\Enums\UserRole;
use App\Models\User;
use Illuminate\Pagination\LengthAwarePaginator;

interface UserServiceInterface
{
    public function changeRole(int $id, UserRole $role): bool;

    public function getPaginated(int $perPage): LengthAwarePaginator;


}



