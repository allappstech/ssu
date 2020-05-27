<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchadlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schadles', function (Blueprint $table) {
            $table->id();
            $table->string('semester',20);
            $table->string('session',20);
            $table->foreignId('allocation_id');
            $table->foreignId('venue_id');
            $table->string('Time',20);
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
        Schema::dropIfExists('schadles');
    }
}
