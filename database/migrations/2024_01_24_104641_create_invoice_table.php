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
        Schema::create('demoinvoice', function (Blueprint $table) {
            $table->id();
            $table->string('staff_name');
            $table->string('staff_id');
            $table->text('date');
            $table->string('Customer_name');
            $table->text('Address');
            $table->string('Bs_type');            
            $table->string('phone');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice');
    }
};
