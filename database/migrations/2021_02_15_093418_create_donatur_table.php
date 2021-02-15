<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonaturTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donatur', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('donasi_id');
            $table->string('email');
            $table->string('notlp');
            $table->string('namalengkap');
            $table->string('metodebayar');
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
        Schema::dropIfExists('donatur');
    }
}
