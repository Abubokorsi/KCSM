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
        Schema::create('topbars', function (Blueprint $table) {
            $table->id();
            $table->string('location');
            $table->string('phone');
            $table->string('email');
            $table->string('twitter');
            $table->string('facebook');
            $table->string('linkedin');
            $table->string('instagram');
            $table->string('youtube');
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
        Schema::dropIfExists('topbars');
    }
};
