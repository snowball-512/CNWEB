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
        Schema::table('students', function (Blueprint $table) {
            $table->dropForeign(['TypesID']);
            
            // Make the TypesID column nullable
            $table->unsignedBigInteger('TypesID')->nullable()->change();

            // Add the new foreign key constraint with 'set null' on delete
            $table->foreign('TypesID')->references('TypesID')->on('Types')->onDelete('set null');
 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('students', function (Blueprint $table) {
            $table->dropForeign(['TypesID']);
            
            // Revert the column to not nullable if necessary (this part might need adjustment based on your original schema)
            $table->unsignedBigInteger('TypesID')->nullable(false)->change();

            // Add the original foreign key constraint with 'cascade' on delete
            $table->foreign('TypesID')->references('TypesID')->on('Types')->onDelete('cascade');
      
        });
    }
};
