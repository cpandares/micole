<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->bigIncrements('director_id');
            $table->unsignedBigInteger('mec_id');
            $table->unsignedBigInteger('country_id');
            $table->unsignedBigInteger('city_id');
            $table->unsignedBigInteger('region_id');
            $table->string('name');
            $table->string('postal');
            $table->string('phone');
            $table->string('password');
            $table->string('email');
            $table->string('email2')->nullable();
            $table->string('website')->nullable();
            $table->string('fax');
            $table->string('address');
            $table->string('address_short');
            $table->double('latitude');
            $table->double('longitude');
            $table->string('plan_preference');
            $table->integer('leads');
            $table->string('business_status');
            $table->string('google_user_ratings_total');
            $table->decimal('google_rating');
            $table->string('revisor');
            $table->boolean('active');
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
        Schema::dropIfExists('data');
    }
}
