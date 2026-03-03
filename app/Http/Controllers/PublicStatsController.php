<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

class PublicStatsController extends Controller
{
    public function __invoke()
    {
        return view('public-stats');
    }

    public function email()
    {
        $recipients = DB::table('stats_passkeys')->whereNotNull('email')->where('is_active', true)->get();

        // return $recipients;

        foreach ($recipients as $recipient) {
            if ($recipient->use_count == 0) {
                Http::timeout(120)
                    ->withoutVerifying() // Add this to fix the OpenSSL "certificate verify failed" error
                    ->withHeaders([
                        'appID' => env('SWIFT_APP_ID'),
                        'Authorization' => 'Bearer ' . env('SWIFT_TOKEN'),
                    ])
                    ->post('https://swift.msya.gov.tt/api/general', [
                        'email' => $recipient->email,
                        'title' => 'Hospitality Operations and Service Training Notification System',
                        'subject' => 'Dashboard Access Code',
                        'name' => $recipient->label,
                        // Added a space and period after the code for better formatting
                        'body' => 'You have been granted access to the Application Stats Dashboard. Please use the following code to log in: ' . $recipient->code . '. To view live metrics and insights on the applications received for the HOIST 2026 programme, visit: https://apps.msya.gov.tt/host/stats',
                        'app' => 'HOIST 2026',
                        'header' => "Hello {$recipient->label}",
                        'fromAddress' => 'noreply.msya@gov.tt',
                        'fromName' => 'MSYA',
                    ]);

                // Optional: Add a small delay if sending many emails to avoid API rate limits
                usleep(500000); // 0.5 seconds
            }
        }
    }
}
