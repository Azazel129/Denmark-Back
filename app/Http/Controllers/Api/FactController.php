<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Fact;
use Illuminate\Http\Request;

class FactController extends Controller
{
    public function index()
    {
        $facts = Fact::all();
        foreach ($facts as $fact) {
            $fact->image = $fact->getImageUrlAttribute();
        }
        return response()->json($facts);
    }

    public function show($id)
    {
        $fact = Fact::find($id);
        if ($fact) {
            $fact->image = $fact->getImageUrlAttribute();
            return response()->json($fact);
        }
        return response()->json(['error' => 'Fact not found'], 404);
    }
}

