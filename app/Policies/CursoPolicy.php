<?php

namespace App\Policies;

use App\Models\Curso;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class CursoPolicy
{

    public function viewAny(User $user): bool
    {
        return true;
    }

    public function view(User $user, Curso $curso): bool
    {
        return true;
    }

    public function create(User $user): bool
    {
        return true;
    }

    public function update(User $user, Curso $curso): bool
    {
        return true;
    }

    public function delete(User $user, Curso $curso): bool
    {
        return true;
    }

    public function restore(User $user, Curso $curso): bool
    {
        return true;
    }

    public function forceDelete(User $user, Curso $curso): bool
    {
        return true;
    }
}
