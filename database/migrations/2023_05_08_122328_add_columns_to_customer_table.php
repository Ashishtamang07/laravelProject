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
        //adding columns to customer table
        Schema::table('customer', function (Blueprint $table) {
            // these new columns sould be added after customer_address field
            $table->string('country_name', 10)->nullable()->after('customer_address');
            $table->string('state_name', 10)->nullable()->after('customer_address');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('customer', function (Blueprint $table) {
            //
        });
    }
};
