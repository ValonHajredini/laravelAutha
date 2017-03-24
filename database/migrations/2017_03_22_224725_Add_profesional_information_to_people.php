<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProfesionalInformationToPeople extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profesionalInformationes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('people_id');
            $table->string('profesionalType');
            $table->string('profesionalContent');
            $table->string('profesionalProperty');
            $table->string('profesionalPriority');
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
        Schema::dropIfExists('profesionalInformation');
    }
}
