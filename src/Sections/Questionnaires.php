<?php

namespace GainLine\Basecamp\Sections;

use GainLine\Basecamp\Models\Questionnaire;

class Questionnaires extends AbstractSection
{
    /**
     * Get a questionnaire.
     *
     * @param  int  $id
     * @return \Illuminate\Support\Collection
     */
    public function show($id)
    {
        $questionnaire = $this->client->get(
            sprintf('buckets/%d/questionnaires/%d.json', $this->bucket, $id)
        );

        return new Questionnaire($this->response($questionnaire));
    }
}
