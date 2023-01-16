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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->boolean('featured')->default(0);
            $table->string('name');
            $table->text('description');
            $table->float('price');
            $table->string('category');
            $table->foreign('category')->references('name')->on('categories')->onUpdate('cascade');
            $table->string('brand');
            $table->string('weight');
            $table->string('dimensions');
            $table->string('color');
            $table->string('country');
            $table->foreign('brand')->references('name')->on('brands')->onUpdate('cascade');
            $table->boolean('visibility')->default(true);
            $table->string('image');
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
        Schema::dropIfExists('products');
    }
};
