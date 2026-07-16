<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class SendAccessCodes extends Command
{
    protected $signature = 'stats:send-codes';
    protected $description = 'Sends unique access codes to all registered users';

    public function handle()
    {
        // Fetch all active passkeys with emails
        $recipients = DB::table('stats_passkeys')
            ->whereNotNull('email')
            ->where('is_active', true)
            ->get();


        foreach ($recipients as $recipient) {
            Http::timeout(120)
            ->withHeaders([
                'appID' => env('SWIFT_APP_ID'),
                'Authorization' => 'Bearer ' . env('SWIFT_TOKEN'),
            ])->post('https://swift.msya.gov.tt/api/general', [
                'email' => $recipient->email,
                'title' => 'Hospitality Operations Service Training Notification System',
                'subject' => 'Dashboard Access Code',
                'name' => $recipient->label,
                'body' => 'You have been granted access to the Application Stats Dashboard. Please use the following code to log in: ' . $recipient->code . 'To view live metrics and insights on the applications received for the HOIST 2026 programme, visit: https://apps.msya.gov.tt/host/stats',
                'app' => 'HOIST 2026',
                'header' => "Hello {$recipient->label}",
                'fromAddress' => 'noreply.msya@gov.tt',
                'fromName' => 'MSYA',
            ]);
        }

        $this->info('Distribution complete!');
    }
}
