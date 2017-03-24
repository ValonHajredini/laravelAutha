<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSocialInformationToPeople extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('socialInformationes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('people_id');
            $table->string('socialType');
            $table->string('socialContent');
            $table->string('socialProperty');
            $table->string('socialPriority');
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
        Schema::dropIfExists('socialInformationeses');
    }
}
