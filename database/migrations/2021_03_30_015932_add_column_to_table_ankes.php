<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToTableAnkes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ankets', function (Blueprint $table) {
            $table->text('survey05_yes_or_no')->after('survey05_13_other');
            $table->text('survey05_14_yes')->after('survey05_yes_or_no');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ankets', function (Blueprint $table) {
            //
        });
    }
}
