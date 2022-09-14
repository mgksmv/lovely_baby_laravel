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
        Schema::create('website_info', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('logo', 100)->default('/public/images/logo.png');
            $table->string('logo_footer', 100)->default('/public/images/logo_footer.png');
            $table->string('address', 150);
            $table->string('phone_number', 15);
            $table->string('email', 32);
            $table->string('vk', 200)->nullable();
            $table->string('telegram', 200)->nullable();
            $table->string('youtube', 200)->nullable();
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
        Schema::dropIfExists('website_infos');
    }
};
