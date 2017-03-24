<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddContactInformationToPeople extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactInformationes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('people_id');
            $table->string('contactType');
            $table->string('contactContent');
            $table->string('contactProperty');
            $table->string('contactPriority');
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
        Schema::dropIfExists('contactInformationes');
    }
}
