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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->String('title')->nullable();
            $table->String('firstname')->nullable();
            $table->String('lastname')->nullable();
            $table->String('gender')->nullable();
            $table->String('email')->nullable();
            $table->String('phone')->nullable();
            $table->String('designation')->nullable();
            $table->String('salary')->nullable();
            $table->String('date_of_birth')->nullable();
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
        Schema::dropIfExists('employees');
    }
};
