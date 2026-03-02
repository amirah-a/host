<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatsPasskeySeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            // ['name' => 'Sherry-Ann Ramlal', 'email' => 'Sherry-Ann.Ramlal@gov.tt'],
            // ['name' => 'Victoria Rampersad', 'email' => 'Victoria.Rampersad@gov.tt'],
            // ['name' => 'Annalicia Barratt', 'email' => 'Annalicia.Barratt@gov.tt'],
            ['name' => 'Amirah Ali', 'email' => 'Amirah.Ali@gov.tt'],


        ];

        foreach ($users as $user) {
            DB::table('stats_passkeys')->updateOrInsert(
                ['label' => $user['name']],
                [
                    'email' => $user['email'],
                    'code' => random_int(100000, 999999),
                    'is_active' => true,
                    'updated_at' => now(),
                ]
            );
        }
    }

}
