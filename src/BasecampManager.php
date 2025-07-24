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
            'token' => Setting::firstWhere('key','basecamp_token')->value,
            'user_agent' => ''
        ]);
        $this->client->setAccountId(config('basecamp.account_id'));
    }

    public function projects()
    {
        return $this->client->projects();
    }

    public function todos($bucket, $todoset)
    {
        return $this->client->todos($bucket, $todoset);
    }

    public function todolists($bucket, $todoset) {
        return $this->client->todolists($bucket, $todoset);
    }

    public function todosets($bucket) {
        return $this->client->todosets($bucket);
    }

    // Add more endpoint shortcuts here as needed
}
