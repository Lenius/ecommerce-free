<?php

namespace App\Observers;

use App\Models\User;
use Illuminate\Support\Str;

class UserObserver
{
    /**
     * Handle the "created" event.
     *
     * @param User $user
     *
     * @throws \Exception
     */
    public function created(User $user)
    {

    }

    /**
     * Handle the "updated" event.
     *
     * @param User $user
     *
     * @throws \Exception
     */
    public function updated(User $user)
    {

    }

    /**
     * Handle the "deleted" event.
     *
     * @param User $user
     *
     * @throws \Exception
     */
    public function deleted(User $user)
    {

    }

    /**
     * Handle the "restored" event.
     *
     * @param User $user
     */
    public function restored(User $user)
    {
    }

    /**
     * Handle the "force deleted" event.
     *
     * @param User $user
     */
    public function forceDeleted(User $user)
    {
    }

    /**
     * Handle the "saving" event.
     *
     * @param User $user
     */
    public function saving(User $user)
    {
        if (empty($user->api_token)) {
            $user->api_token = Str::random(80);
        }
    }
}
