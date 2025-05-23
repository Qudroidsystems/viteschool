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
        Schema::create('secondterm_broadsheets', function (Blueprint $table) {
            $table->id();
            $table->string('studentId')->nullable();
            $table->string('subjectclassid')->nullable();
            $table->string('staffid')->nullable();
            $table->string('broadsheetId')->nullable();
            $table->string('firstterm_broadsheetId')->nullable();
            $table->string('thirdterm_broadsheetId')->nullable();
            $table->string('termid')->nullable();
            $table->string('session')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('secondterm_broadsheets');
    }
};
