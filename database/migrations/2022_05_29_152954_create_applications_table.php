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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string("type")->default('application');
            $table->string("name");
            $table->string("contact");
            $table->string("email");
            $table->string("address1");
            $table->string("address2")->nullable();
            $table->string("postcode");
            $table->string("city");
            $table->string("service_provider");
            $table->string("product_category")->default('null');
            $table->string("package_id")->nullable();
            $table->text("message")->nullable();
            $table->string("status")->default('Pending');
            $table->string("remark")->nullable();
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
        Schema::dropIfExists('applications');
    }
};
