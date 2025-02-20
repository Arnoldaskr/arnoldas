<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Collatzkontroleris extends Controller
{
    public function input(Request $request)
    {
        $number = $request->query('number');

        if (!$number) {
            return view('collatz');
        }

        $sequence = $this->calculate($number);

        return view('collatz', compact('number', 'sequence'));
    }

    private function calculate($number)
    {
        $sequence = [];
        while ($number != 1) {
            $sequence[] = $number;
            $number = ($number % 2 == 0) ? $number / 2 : 3 * $number + 1;
        }
        $sequence[] = 1;
        return $sequence;
    }
}
