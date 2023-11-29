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
        Schema::create('employements', function (Blueprint $table) {
            $table->id();
            $table->string('company');
            $table->string('post');
            $table->date('from');
            $table->date('to');
            $table->string('place');
            // $table->string('reason');
            $table->string('document'); 
            // $table->string('skills')->nullable();  
            $table->integer('applicant_id'); 
            $table->timestamps();
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employements');
    }
};