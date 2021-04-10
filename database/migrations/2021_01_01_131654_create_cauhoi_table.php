<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCauhoiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cauhoi', function (Blueprint $table) {
            $table->Increments('idch');
            $table->string('noidung');
            $table->string('image')->nullable();
            $table->string('media')->nullable();
            $table->string('a');
            $table->string('b');
            $table->string('c');
            $table->string('d');
            $table->unsignedInteger('idda');
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
        Schema::dropIfExists('cauhoi');
    }
}
