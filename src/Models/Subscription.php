<?php

namespace GainLine\Basecamp\Models;

use Basecamp;

class Subscription extends AbstractModel
{
    /**
     * Subscribe the current user.
     *
     * @return \GainLine\Basecamp\Models\Subscription
     */
    public function subscribe()
    {
        return Basecamp::subscriptions($this->url)->subscribe();
    }

    /**
     * Unsubscribe the current user.
     *
     * @return string
     */
    public function unsubscribe()
    {
        return Basecamp::subscriptions($this->url)->unsubscribe();
    }

    /**
     * Update the subscription.
     *
     * @param  array  $data
     * @return \Illuminate\Http\Collection
     */
    public function update(array $data)
    {
        return Basecamp::subscriptions($this->url)->update($data);
    }
}
