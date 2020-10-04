<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('secondname')->nullable();
            $table->string('firstname')->nullable();
            $table->string('email')->unique();
            $table->integer('phones')->nullable();
            $table->integer('national_identification')->nullable();
            $table->string('password')->nullable();
            $table->string('province')->nullable();
            $table->string('commune')->nullable();
            $table->string('ville')->nullable();
            $table->string('quartier')->nullable();
            $table->integer('number')->nullable();
            $table->rememberToken();
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
}
