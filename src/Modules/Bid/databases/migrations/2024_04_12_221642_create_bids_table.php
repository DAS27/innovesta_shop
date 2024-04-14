<?php

declare(strict_types=1);

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
        Schema::create('bids', static function (Blueprint $table): void {
            $table->uuid('id')->primary();
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('email')->index()->nullable();
            $table->string('phone')->index();
            $table->string('contact_method');
            $table->integer('room_dimensions')->nullable();
            $table->string('room_scheme')->nullable();
            $table->string('room_type');
            $table->json('comment')->nullable();
            $table->string('sku')->nullable();
            $table->string('status');
            $table->dateTime('start_at')->nullable();
            $table->dateTime('close_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bids');
    }
};
