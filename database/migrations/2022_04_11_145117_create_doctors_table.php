<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->char('name', 50);
            $table->char('surname', 50);
            $table->char('email', 50);
            $table->char('address', 50);
            $table->char('city', 50);
            $table->char('password', 50);
            $table->string('photo');
            $table->char('number', 50);
            $table->text('curriculum');
            $table->string('medicalService');

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
        Schema::dropIfExists('doctors');
    }
}
