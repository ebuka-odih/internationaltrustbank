<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\RequestCard;
use Illuminate\Http\Request;

class AdminCardController extends Controller
{
    public function cards()
    {
        $cards = RequestCard::all();
        return view('admin.card.list', compact('cards'));
    }

    public function approveCard($id)
    {
        $card = RequestCard::findOrFail($id);
        $card->status = 1;
        $card->save();
        return redirect()->back();
    }

    public function deleteCard($id)
    {
        $card = RequestCard::findOrFail($id);
        $card->delete();
        return redirect()->back();
    }
}
