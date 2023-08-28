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
        Schema::create('sub_categories', function (Blueprint $table) {
            $table->id();
            $table->text('content')->nullable();
            $table->string('preview_image')->nullable();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->string('price')->nullable();
            $table->string('opt_price')->nullable();
            $table->string('article')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->index('category_id');
            $table->foreign('category_id')->on('categories')->references('id')->onDelete('cascade');
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
        Schema::dropIfExists('sub_categories');
    }
};
