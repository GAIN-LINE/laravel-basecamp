<?php

namespace GainLine\Basecamp;

use App\Models\Setting;
use GainLine\Basecamp\Client;

class BasecampManager
{
    protected Client $client;

    public function __construct()
    {
        $this->client = new Client(config('basecamp'));

        $this->client->init([
            'href' => 'https://3.basecampapi.com/4848484/',
            'token' => Setting::firstWhere('key','token')->value,
            'user_agent' => config('service.37signals.user-agent')
        ]);
        $this->client->setAccountId(config('basecamp.account_id'));
    }

    public function projects()
    {
        return $this->client->projects();
    }

    public function todos($bucket, $todolist)
    {
        return $this->client->todos($bucket, $todolist);
    }

    public function todolists($bucket, $todoset) {
        return $this->client->todolists($bucket, $todoset);
    }

    public function todosets($bucket) {
        return $this->client->todosets($bucket);
    }

    public function people() {
        return $this->client->people();
    }

    public function webhooks($bucket) {
        return $this->client->webhooks($bucket);
    }

    public function todolistGroups($bucket, $todolist) {
        return $this->client->todolistGroups($bucket, $todolist);
    }

}
