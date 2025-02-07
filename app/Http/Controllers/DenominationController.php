<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DenominationController extends Controller
{
    public function index()
    {
        return view('denomination');
    }

    public function calculate(Request $request)
    {
        $request->validate([
            'amount' => 'required|integer|min:1',
        ]);

        $amount = (int) $request->amount;
        $denominations = [500, 200, 100, 50, 20, 10, 5, 2, 1];
        $breakdown = [];

        foreach ($denominations as $denomination) {
            if ($amount >= $denomination) {
                $breakdown[$denomination] = floor($amount / $denomination);
                $amount %= $denomination;
            }
        }

        return view('denomination', compact('breakdown'));
    }
}