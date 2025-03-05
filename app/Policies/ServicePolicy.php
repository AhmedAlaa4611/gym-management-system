<?php

namespace App\Policies;

use App\Models\Service;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ServicePolicy
{
    /**
     * Determine whether the user can handle the model.
     */
    public function handle(User $user, Service $service): bool
    {
        return $service->user()->is($user);
    }
}
