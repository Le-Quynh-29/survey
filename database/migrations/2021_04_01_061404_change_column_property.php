<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeColumnProperty extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ankets', function (Blueprint $table) {
            $table->text('info_01_date')->nullable()->change();
            $table->text('info_02_furigana_last_name')->nullable()->change();
            $table->text('info_03_furigane_name')->nullable()->change();
            $table->text('info_04_last_name')->nullable()->change();
            $table->text('info_05_name')->nullable()->change();
            $table->text('info_06_line_id')->nullable()->change();
            $table->text('info_07_mail')->nullable()->change();
            $table->text('info_08_school')->nullable()->change();
            $table->text('info_09_falculty')->nullable()->change();
            $table->text('info_10_tel')->nullable()->change();
            $table->text('info_11_reason')->nullable()->change();
            $table->text('info_12_reason_other')->nullable()->change();
            $table->text('survey_01')->nullable()->change();
            $table->text('survey_02')->nullable()->change();
            $table->text('survey02_2_other')->nullable()->change();
            $table->text('survey_03')->nullable()->change();
            $table->text('survey03_2_not_hear')->nullable()->change();
            $table->text('survey_04')->nullable()->change();
            $table->text('survey_04_2_company')->nullable()->change();
            $table->text('survey_04_3_hp')->nullable()->change();
            $table->text('survey_04_4_other')->nullable()->change();
            $table->text('survey_05')->nullable()->change();
            $table->text('survey05_2_summer')->nullable()->change();
            $table->text('survey05_3_autumn')->nullable()->change();
            $table->text('survey05_4_winter')->nullable()->change();
            $table->text('survey05_5_1day')->nullable()->change();
            $table->text('survey05_6_2day')->nullable()->change();
            $table->text('survey05_7_3day')->nullable()->change();
            $table->text('survey05_8_1week')->nullable()->change();
            $table->text('survey05_9_other')->nullable()->change();
            $table->text('survey05_10_industry')->nullable()->change();
            $table->text('survey05_11_other')->nullable()->change();
            $table->text('survey05_12_occupation')->nullable()->change();
            $table->text('survey05_13_other')->nullable()->change();
            $table->text('survey05_yes_or_no')->nullable()->change();
            $table->text('survey05_14_yes')->nullable()->change();
            $table->text('survey05_15_no')->nullable()->change();
            $table->text('survey_06')->nullable()->change();
            $table->text('survey06_2_event')->nullable()->change();
            $table->text('survey06_3_other')->nullable()->change();
            $table->text('survey_07')->nullable()->change();
            $table->text('survey07_2_number')->nullable()->change();
            $table->text('survey07_3_industry')->nullable()->change();
            $table->text('survey07_4_other')->nullable()->change();
            $table->text('survey07_5_occupation')->nullable()->change();
            $table->text('survey07_6_other')->nullable()->change();
            $table->text('survey_08')->nullable()->change();
            $table->text('survey08_2_number')->nullable()->change();
            $table->text('survey08_3_industry')->nullable()->change();
            $table->text('survey08_4_other')->nullable()->change();
            $table->text('survey08_5_occupation')->nullable()->change();
            $table->text('survey08_6_other')->nullable()->change();
            $table->text('survey08_7_civil')->nullable()->change();
            $table->text('survey_09')->nullable()->change();
            $table->text('survey09_2_number')->nullable()->change();
            $table->text('survey09_3_ind_occ')->nullable()->change();
            $table->text('survey_10')->nullable()->change();
            $table->text('survey10_2_when')->nullable()->change();
            $table->text('survey10_03_other')->nullable()->change();
            $table->text('survey_11')->nullable()->change();
            $table->text('survey11_2_other')->nullable()->change();
            $table->text('survey_12')->nullable()->change();
            $table->text('survey12_2_declining')->nullable()->change();
            $table->text('survey12_3_choice1')->nullable()->change();
            $table->text('survey12_4_choice2')->nullable()->change();
            $table->text('survey12_5_choice3')->nullable()->change();
            $table->text('survey12_6_choice')->nullable()->change();
            $table->text('survey12_7_location')->nullable()->change();
            $table->text('survey12_8_location_choice1')->nullable()->change();
            $table->text('survey12_9_location_choice2')->nullable()->change();
            $table->text('survey12_10_location_choice3')->nullable()->change();
            $table->text('survey12_11_location_choice')->nullable()->change();
            $table->text('survey12_99_reason')->nullable()->change();
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
