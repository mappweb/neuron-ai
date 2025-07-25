<?php

declare(strict_types=1);

namespace NeuronAI\Providers;

use NeuronAI\Providers\OpenAI\OpenAI;

class Mistral extends OpenAI
{
    protected string $baseUri = 'https://api.mistral.ai/v1';

    protected function getStreamParameters(): array
    {
        return $this->parameters;
    }
}
