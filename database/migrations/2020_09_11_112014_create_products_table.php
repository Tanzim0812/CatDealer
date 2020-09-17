<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id',11);
            $table->integer('cat_id');
            $table->unsignedBigInteger('subcat_id');
            $table->string('title');
            $table->string('details',255);
            $table->integer('previous_price');
            $table->integer('offer_price');
            $table->string('image');
            $table->tinyInteger('status')->default('1');
            $table->timestamps();


            $table->foreign('subcat_id')->
            references('id')->
            on('subcategories')->
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
        Schema::dropIfExists('products');
    }
}
