<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
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
            $table->foreignId('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('fname');
            $table->string('lname');
            $table->string('email')->nullable();
            $table->string('address');
            $table->string('address2');
            $table->string('phone');
            $table->string('country')->nullable();
            $table->string('state');
            $table->string('postal');
            $table->double('subtotal');
            $table->double('amount');
            $table->integer('qty');
            $table->bigInteger('order_code')->unique();
            $table->boolean('status')->default(false);
            $table->boolean('type')->default(false);
            $table->softDeletes();
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
}
