<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('checkouts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('Cascade');
            $table->string('fname');
            $table->string('lname');
            $table->string('email');
            $table->string('password');
            $table->string('address1');
            $table->string('address2');
            $table->string('city');
            $table->integer('zip');
            $table->string('paymentMethod');
            $table->bigInteger('cardNumber')->nullable();
            $table->string('expiryDate')->nullable();
            $table->integer('cvv')->nullable();
            $table->enum('status', ['pending', 'processing', 'completed', 'decline'])->default('pending');
            // $table->tinyInteger('status')->default('0');
            // $table->string('tracking_no');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checkouts');
    }
};
