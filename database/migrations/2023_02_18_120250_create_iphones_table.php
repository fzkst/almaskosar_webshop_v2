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
        Schema::create('iphones', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('category_id');
            $table->string('model', 50);
            $table->string('color', 30);
            $table->integer('storage');
            $table->longText('description')->nullable();
            $table->tinyInteger('popular')->default(0);
            $table->tinyInteger('status')->default(1);
            $table->integer('price');
            $table->integer('stock');
            $table->string('image', 100);
            $table->timestamps();
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_hungarian_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('iphones');
    }
};
