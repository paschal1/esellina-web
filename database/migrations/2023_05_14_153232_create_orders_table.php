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
            $table->string('fname');
             $table->string('lname');
              $table->string('email');
               $table->string('phone');
                $table->string('street');
                 $table->string('apartment');
                  $table->string('city');
                   $table->string('state');
                    $table->string('country');
                     $table->string('zip');
                     $table->tinyInteger('status')->default('0');
                     $table->string('note')->nullable();
                     $table->string('payment_id')->nullable();
                     $table->string('tracking_no');
                     $table->string('total_price');
                     $table->string('payment_mode')->nullable();
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
