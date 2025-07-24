<?php

namespace GainLine\Basecamp\Sections;

use GainLine\Basecamp\Models\Needle;

class Needles extends AbstractSection
{
    /**
     * Get the needle.
     *
     * @param  int  $id
     * @return \GainLine\Basecamp\Models\Needle
     */
    public function show($id)
    {
        return new Needle($this->client->get(sprintf('projects/%d/gauge/needles.json', $id)));
    }

    public function update($id, array $data)
    {
        $needle = $this->client->post(sprintf('projects/%d/gauge/needles.json', $id), [
            'json' => $data,
        ]);

        return new Needle($this->response($needle));
    }
}
