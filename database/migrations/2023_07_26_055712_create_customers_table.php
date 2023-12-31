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
        Schema::create('customers', function (Blueprint $table) {
            $table->id('id'); // customer_id//'
            $table->string('name', 60);
            $table->string('email', 100);
            $table->string('gender');
            $table->text('address');
            $table->date('dob');
            $table->string('password');
            $table->boolean('status')->default(0);
            $table->integer('points')->default(0);
            $table->timestamps();  //create_at update_at//
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
};
