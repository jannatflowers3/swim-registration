<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentregistrtions', function (Blueprint $table) {
            $table->id();
            $table->string('yourName')->nullable();
            $table->string('contactumber')->nullable();
            $table->string('emailAddress')->nullable();
            $table->string('address')->nullable();
            $table->string('contactPerson')->nullable();
            $table->string('contactNumber')->nullable();
            $table->string('dbirth')->nullable();
            $table->string('studentNid')->nullable();
            $table->string('studentAcademic')->nullable();
            $table->string('gender')->nullable();
            $table->string('brnNumber')->nullable();
            $table->string('transactionId')->nullable();
            $table->string('toamountPaid')->nullable();
            $table->string('toamountPaidsuccess')->nullable();


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
        Schema::dropIfExists('studentregistrtions');
    }
};
