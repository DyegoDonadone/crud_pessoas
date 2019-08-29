<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PeopleAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people_addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_people');
            $table->string('addresses');
            $table->string('number');
            $table->string('cep');
            $table->string('neighborhood');
            $table->string('city');
            $table->string('state');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('people_addresses');
    }
}
