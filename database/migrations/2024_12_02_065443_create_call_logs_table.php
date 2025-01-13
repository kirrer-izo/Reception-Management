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
        Schema::create('call_logs', function (Blueprint $table) {
            $table->id();

            $table->date('date');
            $table->time('time');
            $table->string('name');
            $table->string('phone_number');
            $table->string('call_duration')->nullable();
            $table->enum('call_type',['inbound','outbound']);
            $table->enum('call_status',['completed','missed','voicemail']);
            $table->string('employee');
            $table->string('notes')->nullable();
            $table->softDeletes();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('call_logs');
    }
};
