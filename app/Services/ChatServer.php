<?php

namespace App\Services;

use GeminiAPI\Client;
use GeminiAPI\Resources\ModelName;
use GeminiAPI\Resources\Parts\TextPart;

class ChatServer
{
    public function __invoke($data, $prompt)
    {
        $outputTokens = 400;
        $generationConfig = (new \GeminiAPI\GenerationConfig())
            ->withCandidateCount(1)
            ->withMaxOutputTokens($outputTokens)
            ->withTemperature(1.0)
            ->withTopK(40)
            ->withTopP(0.6)
            ->withStopSequences([]);


        $prompt .= ' The text should be between {minCharacters} and {maxCharacters} characters long. Include a strong. Response must be in html format';


        $system = str_replace(array_keys($data['change']), $data['change'], $prompt);

        $combined_prompt = 'Without markdown. ' . $system;

        if (isset($data['variable'])) {
            $combined_prompt = $combined_prompt . ' ' . $data['variable'];
        }

        if (isset($data['question'])) {
            $combined_prompt = $combined_prompt . "\n\n" . $data['question'];
        }

        $client = new Client(env('GEMINI_API_KEY'));
        $response = $client->generativeModel(ModelName::GEMINI_1_5_FLASH)
            ->withGenerationConfig($generationConfig)
            ->generateContent(
                new TextPart($combined_prompt),
            );

        return $response->text();
    }
}
