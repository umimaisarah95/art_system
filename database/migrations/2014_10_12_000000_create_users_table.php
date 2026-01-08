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
    Schema::create('users', function (Blueprint $table) {
        $table->id('user_id');
        $table->string('full_name');
        $table->integer('age');
        $table->enum('gender', ['Male', 'Female']);
        $table->string('email')->unique();
        $table->string('password');
        $table->enum('role', ['admin', 'user'])->default('user');
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
        Schema::dropIfExists('users');
    }
};
