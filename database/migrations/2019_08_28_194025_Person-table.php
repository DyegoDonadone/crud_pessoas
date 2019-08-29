<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PersonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('person', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cpf_cnpj');
            $table->string('name')->nullable();
            $table->string('rg')->nullable();
            $table->string('sex')->nullable();
            $table->date('datebirth_or_foundation');
            $table->string('corporate_name')->nullable();
            $table->string('fantasy_name')->nullable();
            $table->string('state_registration')->nullable();
            $table->integer('class');
            $table->integer('status')->default('0');
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
        Schema::dropIfExists('person');
    }
}
