<?php

namespace App\Services;

use App\Enums\UserRole;
use App\Models\User;
use Illuminate\Pagination\LengthAwarePaginator;

class UserService
{
    /**
     * Create a new class instance.
     */
    public function __construct(private userRepositoryInterface $userRepository)
    {}

    public function changeRole(int $id, UserRole $role): bool
    {
        return $this->userRepository->updateRole($id, $role);


    }
    public function getPaginated(int $perPage): LengthAwarePaginator
    {
        return $this->userRepository->getPaginated($perPage);
    }
}
