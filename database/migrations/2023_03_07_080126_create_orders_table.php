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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('last_name')->nullable();
            $table->string('first_name')->nullable();
            $table->string('email');
            $table->integer('postal_code');
            $table->string('city');
            $table->string('address');
            $table->string('phone_number');
            $table->string('customer_code');
            $table->string('total_price');
            $table->tinyInteger('status')->default(0);
            $table->string('message')->nullable();
            $table->string('tracking_number');
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
        Schema::dropIfExists('orders');
    }
};
