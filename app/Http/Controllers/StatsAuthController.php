<?php

namespace App\Http\Controllers;

use App\Models\Passkey;
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
        $passkey = Passkey::where('code', $request->passkey)
            ->where('is_active', true);

        $isValid = $passkey->exists();

        if ($isValid) {
            $passkey = $passkey->first();
            $passkey->update(['last_used_at' => now(), 'use_count' => $passkey['use_count'] + 1]);
            session(['stats_authorized' => true]);

            return redirect()->route('stats.index');
        }

        return back()->withErrors(['passkey' => 'Invalid or inactive code.']);
    }
}

