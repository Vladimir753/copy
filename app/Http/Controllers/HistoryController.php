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
use Illuminate\Http\Request;
use Orhanerday\OpenAi\OpenAi;
use Gemini\Data\GenerationConfig;
use Gemini\Enums\HarmBlockThreshold;
use Gemini\Data\SafetySetting;
use Gemini\Enums\HarmCategory;

class HistoryController extends Controller
{
    public function index()
    {
        //TODO change with real id
        $histories = History::where('user_id', 1)
            ->get()
            ->groupBy(function ($history) {
            return $history->template()['name'];
        });

        return view('history.view', [
            'histories' => $histories
        ]);
    }

    public function show(Request $request)
    {
        $history = History::where('id', $request->id)->first();

        return view('history.view', [
            'history' => $history
        ]);
    }
}
