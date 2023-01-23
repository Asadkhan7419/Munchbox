<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->nullable();
            $table->string('title')->nullable();
            $table->string('tagline')->nullable();
            $table->string('email')->nullable();
            $table->double('phone_no')->nullable();
            $table->string('location')->nullable();
            $table->string('facebook')->nullable();
            $table->string('tweeter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('pintrest')->nullable();
            $table->string('youtube')->nullable();
            $table->string('copyright')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
};
