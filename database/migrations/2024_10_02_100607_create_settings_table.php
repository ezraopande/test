<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateSettingsTable extends Migration
{
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('tagline')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('location')->nullable();
            $table->string('logo')->nullable();
            $table->string('instagram_username')->nullable();
            $table->string('twitter_username')->nullable();
            $table->string('youtube_link')->nullable();
            $table->string('whatsapp_number')->nullable();
            $table->string('copyright')->nullable();
            $table->text('footer_description')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
