<?php

namespace App\Policies;

use App\Models\Colegio;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ColegioPolicy
{

    public function viewAny(User $user): bool
    {
        return true;
    }

    public function view(User $user, Colegio $colegio): bool
    {
        return true;
    }

    public function create(User $user): bool
    {
        return true;
    }

    public function update(User $user, Colegio $colegio): bool
    {
        return true;
    }

    public function delete(User $user, Colegio $colegio): bool
    {
        return true;
    }

    public function restore(User $user, Colegio $colegio): bool
    {
        return true;
    }

    public function forceDelete(User $user, Colegio $colegio): bool
    {
        return true;
    }
    public function massDelete(User $user): bool
    {
        return true;
    }
}
