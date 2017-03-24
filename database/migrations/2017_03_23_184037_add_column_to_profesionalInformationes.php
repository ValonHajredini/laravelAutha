<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnToProfesionalInformationes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('profesionalInformationes', function($table) {
            $table->string('startWork');
            $table->string('endWork');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('profesionalInformationes', function($table) {
            $table->dropColumn('startWork');
            $table->dropColumn('endWork');
        });
    }
}
