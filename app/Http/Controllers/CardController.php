<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{
    public function index(Request $request)
    {
        $validated = $request->validate([
            'cardSlug' => 'required|max:11',
            'pin' => 'required|digits:4'
        ]);

        $card = Card::where('slug', $request['cardSlug'])
                    ->where('pin', $request['pin'])
                    ->with('store')
                    ->firstOrFail();

        return view('card/show', [
            'card' => $card
        ]);
    }
}
