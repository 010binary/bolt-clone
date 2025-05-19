<?php

use App\Models\User;
use App\Models\Driver;
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
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class, 'user_id');
            $table->foreignIdFor(Driver::class, 'driver_id');
            $table->boolean('is_started')->default(false);
            $table->boolean('is_completed')->default(false);
            $table->json('origin')->nullable();
            $table->json('destination')->nullable();
            $table->string('destination_address')->nullable();
            $table->json('driver_location')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trips');
    }
};
