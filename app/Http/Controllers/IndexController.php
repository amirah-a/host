<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class IndexController extends Controller
{
    public function confirmation(Request $request)
    {
        $token = $request->query('token');

        $data = Cache::pull("confirmation:$token");

        if (!$data) {
            abort(404);
        }

        return view('confirmation', [
            'firstName' => $data['FirstName'],
            'programmeName' => $data['ProgrammeName'],
        ]);
    }
}
