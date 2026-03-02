<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StatsAuthController extends Controller
{
    public function show()
    {
        return view('stats-login');
    }

    public function login(Request $request)
    {
        // Check if the entered code exists and is active in the database
        $isValid = DB::table('stats_passkeys')
            ->where('code', $request->passkey)
            ->where('is_active', true)
            ->exists();

        if ($isValid) {
            session(['stats_authorized' => true]);
            return redirect()->route('stats.index');
        }

        return back()->withErrors(['passkey' => 'Invalid or inactive code.']);
    }
}

