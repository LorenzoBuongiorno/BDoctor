<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('doctors', function (Blueprint $table) {
            //
            $table->string('password')->change();
            $table->char('email', 50)->unique()->change();
            $table->string('photo', )->nullable()->change();
            $table->char('number', 50)->nullable()->change();
            $table->text('curriculum')->nullable()->change();
            $table->string('medicalService',)->nullable()->change();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('doctors', function (Blueprint $table) {
            //
            $table->char('password', 50)->change();
            $table->char('email', 50)->change();
            $table->string('photo')->change();
            $table->char('number', 50)->change();
            $table->text('curriculum')->change();
            $table->string('medicalService')->change();


        });
    }
}
