<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserchatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userchats', function (Blueprint $table) {
            $table->bigIncrements('id',11);
            $table->unsignedBigInteger('user_id');
            $table->integer('admin_id')->default(2);
            $table->unsignedBigInteger('pro_id');
            $table->string('token');
            $table->timestamps();

            $table->foreign('user_id')->
            references('id')->
            on('users')->
            onDelete('cascade');

            $table->foreign('pro_id')->
            references('id')->
            on('products')->
            onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userchats');
    }
}
