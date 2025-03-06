<?php

namespace App\Http\Controllers;

use App\Models\History;
use App\Services\ChatServer;
use Gemini\Data\Content;
use Gemini\Enums\Role;
use Gemini\Laravel\Facades\Gemini;
use GeminiAPI\Client;
use GeminiAPI\Resources\ModelName;
use GeminiAPI\Resources\Parts\TextPart;
use Orhanerday\OpenAi\OpenAi;
use Gemini\Data\GenerationConfig;
use Gemini\Enums\HarmBlockThreshold;
use Gemini\Data\SafetySetting;
use Gemini\Enums\HarmCategory;

class IsReadController extends Controller
{
    public function index()
    {
        //TODO change with real id
        $history = History::where('user_id', 1)->where('is_read', false)->first();

        if ($history) {
            $history->update(['is_read' => true]);
        }

        return response()->json(['message' => optional($history)->message]);
    }
}
