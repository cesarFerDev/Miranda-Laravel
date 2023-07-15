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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignID('user_id')->references('id')->on('users_guests')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('room_id')->index();
            $table->foreign('room_id')->references('number')->on('rooms')->onUpdate('cascade')->onDelete('cascade');
            $table->enum('type', ['Food', 'Service']);
            $table->string('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
