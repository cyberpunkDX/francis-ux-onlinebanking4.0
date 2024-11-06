<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Models\Card;
use App\Models\Admin;
use App\Enum\CardType;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CardController extends Controller
{
    public function index()
    {
        $admin = Admin::where('registration_token', auth('admin')->user()->registration_token)->first();
        $cards = Card::where('registration_token', $admin->registration_token)->latest()->get();
        $cardTypes = CardType::cases();

        $data = [
            'title' => 'Cards',
            'cards' => $cards,
            'admin' => $admin,
            'cardTypes' => $cardTypes
        ];
        return view('dashboard.admin.card.index', $data);
    }
    public function show($uuid)
    {
        $admin = Admin::where('registration_token', auth('admin')->user()->registration_token)->first();
        $card = Card::where('uuid', $uuid)->first();
        $cardTypes = CardType::cases();

        $data = [
            'title' => 'Cards',
            'card' => $card,
            'admin' => $admin,
            'cardTypes' => $cardTypes
        ];
        return view('dashboard.admin.card.show', $data);
    }
    public function delete($uuid)
    {
        $card = Card::where('uuid', $uuid)->first();

        $card->delete();

        return redirect()->route('admin.card.index')->with('success', 'Card deleted successfully');
    }

    public function edit($uuid)
    {

        $admin = Admin::where('registration_token', auth('admin')->user()->registration_token)->first();
        $card = Card::where('uuid', $uuid)->first();
        $cardTypes = CardType::cases();

        $data = [
            'title' => 'Cards',
            'card' => $card,
            'admin' => $admin,
            'cardTypes' => $cardTypes
        ];
        return view("dashboard.admin.card.edit", $data);
    }

    public function update(Request $request, $uuid)
    {
        $card = Card::where('uuid', $uuid)->first();

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'balance' => 'required|numeric',
            'type' => 'required|string|max:255',
            'status' => ['string', 'required'],
            'cvv' => ['required', 'numeric'],
            'number' => ['required', 'numeric'],
            'date' => ['required', 'date']
        ]);

        $card->fill($data);
        $card->save();

        return redirect()->route('admin.card.index')->with('success', 'Card updated successfully');
    }
}
