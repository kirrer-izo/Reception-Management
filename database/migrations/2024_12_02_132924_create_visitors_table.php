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
        if(!Schema::hasTable('visitors')){
            Schema::create('visitors', function (Blueprint $table) {
                $table->id();
                
                $table->date('date');
                $table->string('name');
                $table->string('phone_number');
                $table->string('email');
                $table->string('company')->nullable();
                $table->string('host_name');
                $table->time('check_in_time');
                $table->time('check_out_time')->nullable();
                $table->softDeletes();
    
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visitors');
    }
};
