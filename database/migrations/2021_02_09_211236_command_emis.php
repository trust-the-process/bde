<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CommandEmis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('command_emis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('identifiantFacture');
            $table->string('id_user');
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('tel')->nullable();
            $table->string('destination')->nullable();
            $table->string('table')->nullable();
            $table->json('idProduct')->nullable();
            $table->json('allProduct')->nullable();
            $table->json('allQuantityCommande')->nullable();
            $table->json('allPriceUnitaire')->nullable();
            $table->json('allPriceTotal')->nullable();
            $table->double('totalCommande')->nullable();
            $table->double('totalFacture')->nullable();
            $table->boolean('send_SMS')->nullable();
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
