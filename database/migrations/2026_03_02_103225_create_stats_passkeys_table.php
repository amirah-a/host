<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('stats_passkeys', function (Blueprint $table) {
        $table->id();
        $table->string('code')->unique();
        $table->string('label')->nullable(); // User Name
        $table->string('email')->unique()->nullable();
        $table->boolean('is_active')->default(true);
        $table->timestamp('last_used_at')->nullable();
        $table->integer('use_count')->default(0);
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stats_passkeys');
    }
};
