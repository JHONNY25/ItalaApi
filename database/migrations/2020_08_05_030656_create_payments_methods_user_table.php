<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsMethodsUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_payments_methods', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('payment_method_id');
            $table->unsignedInteger('user_id');
            $table->string('card_number');
            $table->string('name_number');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('user_payments_methods', function (Blueprint $table) {
            $table->foreign('payment_method_id')->references('id')->on('payment_method');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_payments_methods');
    }
}
