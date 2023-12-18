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
        Schema::create('trainings', function (Blueprint $table) {
            $table->id();
            $table->string('training');
            $table->string('country');
            $table->date('sdate');
            $table->date('edate');
            // $table->string('reason');
            $table->string('certificates'); 
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
        Schema::dropIfExists('trainings');
    }
};