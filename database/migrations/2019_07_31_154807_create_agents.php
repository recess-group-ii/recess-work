<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fName',50);
            $table->string('lName',50);
            $table->char('gender',1);
            $table->string('password',10);
            $table->char('signature',1);
            $table->unsignedBigInteger('districtID', false)->nullable(true);
            $table->unsignedBigInteger('agentHeadID', false)->nullable(true);
            $table->timestamps();
            $table->foreign('districtID')->references('id')->on('districts');
            $table->foreign('agentHeadID')->references('id')->on('agents');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agents');
    }
}
