<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Product extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('referent');
            $table->string('title');
            $table->string('description');
            $table->string('category');
            $table->decimal('quantity');
            $table->double('price', 25, 1);
            $table->decimal('alarm_stock')->nullable();
            $table->mediumText('image')->nullable();
            $table->json('list_image')->nullable();
            $table->string('remise')->nullable();
            $table->string('product_type');
            $table->string('provider');
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
