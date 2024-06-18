<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Monach;
use Illuminate\Http\Request;

class MonarchController extends Controller
{
    public function index()
    {
        $monarchs = Monach::all();
        foreach ($monarchs as $monarch) {
            $monarch->image = $monarch->getImageUrlAttribute();
        }
        return response()->json($monarchs);
    }

    public function show($id)
    {
        $monarch = Monach::find($id);
        if ($monarch) {
            $monarch->image = $monarch->getImageUrlAttribute();
            return response()->json($monarch);
        }
        return response()->json(['error' => 'Monarch not found'], 404);
    }
}

