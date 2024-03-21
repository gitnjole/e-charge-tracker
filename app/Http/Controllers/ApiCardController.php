<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\ValidateCardRequest;

class ApiCardController extends Controller
{
    public function index(ValidateCardRequest $request): JsonResponse
    {
        $card = Card::where('slug', $request->card_slug)
                    ->where('pin', $request->pin)
                    ->with('store')
                    ->firstOrFail();
        
        $cardData = [
            'id' => $card->id,
            'slug' => $card->slug,
            'amount_left' => $card->amount_left,
            'store' => $card->store ? [
                'name' => $card->store->name,
                'address' => $card->store->address
            ] : null,
        ];

        return response()->json($cardData);
    }
}
