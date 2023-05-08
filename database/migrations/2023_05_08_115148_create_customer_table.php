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
        // creating customer_table field 
        Schema::create('customer', function (Blueprint $table) {
            $table->id('customer_id'); // changing deafult attribute id to customer_id
            $table->timestamps();
            $table->string('customer_name');
            $table->text('customer_address');
            $table->enum('gender', ["m", "f", "o"])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer');
    }
};
