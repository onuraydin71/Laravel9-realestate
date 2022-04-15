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
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->foreignId(column:'category_id')->nullable();
            $table->foreignId(column:'user_id')->nullable();             
            $table->string(column:'title');
            $table->string(column:'keywords')->nullable();
            $table->string(column:'description')->nullable();
            $table->string(column:'image')->nullable();
            $table->string(column:'detail')->nullable();
            $table->float(column:'price')->nullable();
            $table->integer(column:'m²')->nullable();
            $table->integer(column:'number of rooms')->nullable();
            $table->integer(column:'building Age')->nullable();
            $table->integer(column:'floor location')->nullable();
            $table->integer(column:'number of floors')->nullable();
            $table->integer(column:'warm-up type')->nullable();
            $table->integer(column:'number of bathrooms')->nullable();
            $table->integer(column:'balcony')->nullable();
            $table->integer(column:'furnished')->nullable();
            $table->integer(column:'using status')->nullable();
            $table->integer(column:'dues')->nullable();
            $table->integer(column:'swap')->nullable();
            $table->integer(column:'property type')->nullable();
            $table->string(column:'status', length:6)->default('False');
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
        Schema::dropIfExists('houses');
    }
};
