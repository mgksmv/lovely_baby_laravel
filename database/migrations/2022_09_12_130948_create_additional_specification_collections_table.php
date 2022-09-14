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
        Schema::create('additional_specification_collections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('custom_specification_id')->constrained()->cascadeOnDelete();
            $table->string('value', 50);
            $table->foreignId('collection_id')->constrained()->cascadeOnDelete();
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
        Schema::dropIfExists('additional_specification_collections');
    }
};
