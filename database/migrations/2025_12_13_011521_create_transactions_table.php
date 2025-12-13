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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name')->nullable(); 
            $table->string('mechanic_name')->nullable();
            $table->string('license_plate')->nullable();
            $table->string('vehicle_type')->nullable();    
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); 
            $table->integer('total');       
            $table->integer('pay');         
            $table->integer('change');     
            $table->timestamps();       
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
