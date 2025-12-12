<?php

namespace Database\Seeders;

use App\Models\User;
use M21\Formkit\Database\Seeders\FormQuestionsSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            FormQuestionsSeeder::class,
        ]);
    }
}
