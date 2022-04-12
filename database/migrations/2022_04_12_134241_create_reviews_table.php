<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('doctor_id');
            $table->char('name', 50);
            $table->text('text', 50);
            $table->tinyInteger('vote');

            $table->foreign('doctor_id')
                ->references('id')
                ->on('doctors');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
