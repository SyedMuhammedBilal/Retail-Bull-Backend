<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('company_id')->nullable(false);
            $table->foreignId('location_category_id')->nullable(false);
            $table->string('location_code')->nullable(false);
            $table->string('location_name')->nullable(false);
            $table->string('location_email')->nullable(false);
            $table->string('location_address')->nullable(false);
            $table->string('location_phone_number');
            $table->enum('location_status',['Active','Disabled']);
            $table->timestamps();

            $table->unique(['company_id','location_code']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locations');
    }
}
