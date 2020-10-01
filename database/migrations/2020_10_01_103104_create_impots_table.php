<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImpotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('impots', function (Blueprint $table) {
            $table->id();
            $table->string('revenuebrute');
            $table->string('taux');
            $table->string('impotretenue');
            $table->integer('solde');
            $table->dateTime('datedepot');
            $table->date('dateversement');
            $table->string('identiteamr');
            $table->string('reference');
            $table->date('datepaiement');
            $table->string('referencepreuve');
            $table->unsignedBigInteger('user_id');
            $table->bigIncrements('note_id');
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
        Schema::dropIfExists('impots');
    }
}
