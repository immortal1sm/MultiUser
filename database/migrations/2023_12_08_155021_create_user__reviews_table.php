<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_review', function (Blueprint $table) {
            $table->id();
            $table->integer('userid');
            $table->integer('filmid');
            $table->string('review')->nullable();
            $table->string('username')->nullable();
            $table->string('film_title')->nullable();
            $table->integer('rating')->nullable();
            $table->date('review_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user__reviews');
    }
}
