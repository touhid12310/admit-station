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
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('EIIN')->unique(); /* EIIN (Educational Institute Identification Number) */
            $table->string('E_year')->nullable();
            $table->string('country_code');
            $table->string('mobile_no');
            $table->string('email')->unique();
            $table->string('country');
            $table->string('city');
            $table->string('address');
            $table->string('logo')->nullable();
            $table->string('thumb_img')->nullable();
            $table->enum('vendors_types', ['Schools', 'Colleges', 'Universitys'])->default('Schools');
            $table->enum('app_status', ['Pending', 'Approved', 'Cancel'])->default('Pending');
            $table->enum('status', ['Active', 'Inactive'])->default('Active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendors');
    }
};
