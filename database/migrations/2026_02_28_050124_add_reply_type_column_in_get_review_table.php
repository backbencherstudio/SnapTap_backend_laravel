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
        Schema::table('get_reviews', function (Blueprint $table) {
            $table->enum('reply_type', ['pending_reply', 'ai_reply', 'manual_reply'])
                ->default('pending_reply')
                ->after('status')
                ->comment('pending_reply, ai_reply, manual_reply');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('get_reviews', function (Blueprint $table) {
            //
        });
    }
};
