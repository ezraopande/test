<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // database/migrations/xxxx_xx_xx_create_sliders_table.php
public function up()
{
    Schema::create('sliders', function (Blueprint $table) {
        $table->id();
        $table->string('image');
        $table->string('title');
        $table->string('subtitle');
        $table->text('description')->nullable();
        $table->string('link1_text')->nullable();
        $table->string('link1_url')->nullable();
        $table->string('link2_text')->nullable();
        $table->string('link2_url')->nullable();
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('sliders');
}

};
