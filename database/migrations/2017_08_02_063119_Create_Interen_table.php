<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInterenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intern', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kepada');
            $table->string('dari');
            $table->string('no');
            $table->date('tanggal');
            $table->string('hal');
            $table->text('isi');
            // $table->integer('status');
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
        //
    }
}
