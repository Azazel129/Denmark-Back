<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\History;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index()
    {
        $histories = History::all();
        foreach ($histories as $history) {
            $history->image = $history->getImageUrlAttribute();
        }
        return response()->json($histories);
    }

    public function show($id)
    {
        $history = History::find($id);
        if ($history) {
            $history->image = $history->getImageUrlAttribute();
            return response()->json($history);
        }
        return response()->json(['error' => 'History not found'], 404);
    }
}
