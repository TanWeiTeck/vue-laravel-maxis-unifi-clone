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
        Schema::create('telco_packages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('service_provider');
            $table->string('package_id');
            $table->string('internet_speed');
            $table->string('description');
            $table->integer('price');
            $table->integer('discount');
            $table->integer('discounted_price');
            $table->boolean('is_active')->default(true);
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
        Schema::dropIfExists('telco_package');
    }
};
