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
        Schema::create('estabs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('street');
            $table->smallInteger('house');
            $table->string('contact_number');
            $table->time('opening_time')->default(9);
            $table->time('closing_time')->default(23);
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
        Schema::dropIfExists('estabs');
    }
};
