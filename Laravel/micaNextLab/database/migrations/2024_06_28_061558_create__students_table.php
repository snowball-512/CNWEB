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
        Schema::create('students', function (Blueprint $table) {
            $table->integerIncrements('StudentID');
            $table->unsignedInteger('TypesID');
            $table->foreign('TypesID')->references('TypesID')->on('Types')->onDelete('cascade');
            $table->string('StudentName');
            $table->date('StudentBirthday');
            $table->enum('StudentGender',['0', '1']);
            $table->string('StudentAddress');
            $table->string('StudentPhoneNumber');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
