<?php

namespace App\Policies;

use App\Models\Period;
use App\Models\User;

class PeriodPolicy
{
    /**
     * Determine whether the user can handle the model.
     */
    public function handle(User $user, Period $period): bool
    {
        return $period->user()->is($user);
    }
}
