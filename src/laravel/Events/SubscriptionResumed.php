<?php

namespace Dev7studios\Chip\Laravel\Events;

class SubscriptionResumed
{
    public $user;

    /**
     * Create a new event instance.
     *
     * @param $user
     */
    public function __construct($user)
    {
        $this->user = $user;
    }
}