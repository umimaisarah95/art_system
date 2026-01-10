<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('artclasses', function (Blueprint $table) {
            $table->id('class_id');
            $table->string('image_path');
            $table->string('class_name');
            $table->text('description');
            $table->enum('art_type', ['Batik', 'Anyaman', 'Calligraphy', 'Ukiran Kayu', 'Wau Bulan']);
            $table->enum('mode' , ['Online', 'Physical']);
            $table->string('link')->nullable();
            $table->string('location')->nullable();
            $table->integer('duration');
            $table->date('start_date');
            $table->date('end_date');
            $table->decimal('price', 8, 2);
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
        Schema::dropIfExists('artclasses');
    }
};
