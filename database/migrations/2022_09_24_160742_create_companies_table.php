<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('company_code')->nullable(false)->unique()->index();
            $table->string('company_name')->nullable(false);
            $table->string('vat_number')->nullable(false)->unique();
            $table->string('company_email')->nullable(false)->unique();
            $table->string('company_phone_number')->nullable(false);
            $table->enum('company_status',['Active','Disabled'])->default('Active')->nullable(false);

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
        Schema::dropIfExists('companies');
    }
}
