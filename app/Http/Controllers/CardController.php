<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{
    public function index(Request $reqeust)
    {
        $validated = $reqeust->validate([
            'cardSlug' => 'required|max:11',
            'pin' => 'required'
        ]);

        $card = Card::where('slug', $validated['cardSlug'])
                    ->where('pin', $validated['pin'])
                    ->first();

        if (!$card) $card = null;

        return view('card/show', [
            'card' => $card
        ]);
    }

}
