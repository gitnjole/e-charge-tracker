<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{
    public function find(Request $request)
    {
        $validated = $request->validate([
            'slug' => 'required|max:11',
            'pin' => 'required|digits:4'
        ]);

        $card = Card::where('slug', $validated['slug'])
                    ->where('pin', $validated['pin'])
                    ->with('store')
                    ->first();

        if ($card) {
            return redirect()->route('cards.show', [
                'card' => $card
            ]);
        } else {
            return redirect()->back()->withErrors('Card not found');
        }
    }
    
    public function show(Card $card)
    {
        return view('cards/show', compact('card'));
    }
}
