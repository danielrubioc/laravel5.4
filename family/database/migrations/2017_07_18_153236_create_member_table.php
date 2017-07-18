<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('member', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('last_name');
            $table->string('age');
            $table->date('birth_date');
            $table->string('avatar');
            $table->string('school');
            $table->string('cel_phone');
            $table->string('phone');
            $table->integer('family_id')->unsigned(); //foreign_key
            $table->foreign('family_id')->references('id')->on('family')->onDelete('cascade');
            $table->timestamps(); //crea create_at y update_at

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
        Schema::dropIfExists('member');
    }
}
