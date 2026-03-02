<?php

namespace App\Console\Commands;

use App\Mail\AccessCodeMail;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

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
            Mail::to($recipient->email)->send(new AccessCodeMail($recipient->label, $recipient->code));
            $this->info("Sent code to: {$recipient->label} ({$recipient->email})");
        }

        $this->info('Distribution complete!');
    }
}
