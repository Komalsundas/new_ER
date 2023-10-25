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
        Schema::create('education', function (Blueprint $table) {
            $table->id();
            $table->string('institute');
            $table->integer('year');
            $table->string('course_name');
            $table->integer('grade');
            $table->char('stream');
            $table->integer('eng');
            $table->integer('dzo');
            $table->integer('math');
            $table->integer('phy')->nullable();
            $table->integer('che')->nullable();
            $table->integer('bio')->nullable();
            $table->integer('eco')->nullable();
            $table->integer('it');
            $table->integer('com')->nullable();
            $table->integer('acc')->nullable();
            $table->integer('aggregate');
            $table->string('marksheet');
            $table->integer('applicant_id');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('education');
    }
};