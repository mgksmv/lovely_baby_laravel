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
        Schema::create('collections', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->text('description')->nullable();
            $table->integer('price')->nullable();
            $table->string('image', 100)->nullable();
            $table->string('image_2', 100)->nullable();
            $table->string('instruction')->nullable();
            $table->string('material', 50)->nullable();
            $table->string('color', 50)->nullable();
            $table->string('patina', 50)->nullable();
            $table->string('made_in', 50)->nullable();
            $table->string('bed_size', 50)->nullable();
            $table->string('drawer_size', 50)->nullable();
            $table->string('wardrobe_size', 50)->nullable();
            $table->string('slug', 100)->unique();
            $table->boolean('is_published')->default(1);
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
        Schema::dropIfExists('collections');
    }
};
