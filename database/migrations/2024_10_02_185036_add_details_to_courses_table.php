<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->string('skill_level')->nullable(); // Add this line
            $table->string('location')->nullable(); // Add this line
            $table->string('language')->nullable(); // Add this line
            $table->boolean('certificate')->default(false); // Add this line
            $table->boolean('assessments')->default(false); // Add this line
        });
    }
    
    public function down()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropColumn(['skill_level', 'location', 'language', 'certificate', 'assessments']);
        });
    }
    

   
};
