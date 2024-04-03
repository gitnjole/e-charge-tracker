<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\ValidateStoreRequest;

class ApiStoreController extends Controller
{
    public function index(ValidateStoreRequest $request): JsonResponse
    {
        $query = Store::query();

        if ($request->has('id')) {
            $query->where('id', $request->id);
        }

        if ($request->has('city')) {
            $query->where('city', $request->city);
        }

        $stores = $query->get();

        if ($stores->isEmpty()) {
            return response()->json('Data not found.', 406);
        }

        return response()->json($stores);
    }
}
