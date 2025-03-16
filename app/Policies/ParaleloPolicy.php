<?php

namespace App\Policies;

use App\Models\Paralelo;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ParaleloPolicy
{
    public function viewAny(User $user): bool
    {
        return true;
    }

    public function view(User $user, Paralelo $paralelo): bool
    {
        return true;
    }

    public function create(User $user): bool
    {
        return true;
    }

    public function update(User $user, Paralelo $paralelo): bool
    {
        return true;
    }

    public function delete(User $user, Paralelo $paralelo): bool
    {
        return true;
    }

    public function restore(User $user, Paralelo $paralelo): bool
    {
        return true;
    }

    public function forceDelete(User $user, Paralelo $paralelo): bool
    {
        return true;
    }
}
