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
        Schema::create('my_form_models', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('firstName');
            $table->string('lastName');
            $table->string('gender');
            $table->string('birthday');
            $table->string('email');
            $table->string('company');
            $table->text('message');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('my_form_models');
    }
};
