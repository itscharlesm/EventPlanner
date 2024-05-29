<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('roleID')->unique();
            $table->text('lastName');
            $table->text('firstName');
            $table->text('middleName')->nullable();
            $table->date('birthDate');
            $table->integer('age');
            $table->text('address');
            $table->string('mobile_number', 15);
            $table->string('email')->unique();
            $table->string('password');
            $table->binary('profile_pic')->nullable()->default('default_profile_pic.jpg'); // Default profile picture
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
        Schema::dropIfExists('employee');
    }
}

