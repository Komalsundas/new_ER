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
            $table->string('grade');
            $table->integer('eng');
            $table->integer('dzo');
            $table->integer('math');
            $table->integer('phy');
            $table->integer('chem');
            $table->integer('bio');
            $table->integer('eco');
            $table->integer('it');
            $table->integer('com');
            $table->string('acc');
            $table->string('aggregate');
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
