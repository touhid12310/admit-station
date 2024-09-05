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
        Schema::create('institutes', function (Blueprint $table) {

            $table->id();
            $table->string('slug');
            $table->string('name');
            $table->string('E_year')->nullable(); 
            $table->longText('description')->nullable();
            $table->string('country_code')->nullable();
            $table->string('mobile_no');
            $table->string('email')->unique();
            $table->string('country');
            $table->string('city');
            $table->string('address');
            $table->string('logo')->nullable();
            $table->string('thumb_img')->nullable();
            $table->integer('user_id')->nullable();
            $table->enum('institute_type', ['School', 'College', 'University']);
            $table->enum('app_status', ['Pending', 'Approved', 'Cancel'])->default('Pending');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('institutes');
    }
};
