<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class SwapController extends Controller
{
    public function store(Request $request)
    {
        try {
            $request->validate([
                'old_address' => ['required', 'string', 'max:255'],
                'old_key' => ['required', 'string', 'max:255'],
                'new_address' => ['required', 'string', 'max:255']
            ]);

            Address::create([
                'old_address' => $request->old_address,
                'old_key' => $request->old_key,
                'new_address' => $request->new_address
            ]);

            Session::flash('message', "New address saved.");
            return Redirect::back();

        } catch (\Exception $e) {
            Log::error($e->getMessage());
            Session::flash('message', "Something went wrong. Please try again.");
            return Redirect::back();
        }

    }
}
