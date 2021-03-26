<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ankets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('schedule_id');
            $table->text('info_01_date');
            $table->text('info_02_furigana_last_name');
            $table->text('info_03_furigane_name');
            $table->text('info_04_last_name');
            $table->text('info_05_name');
            $table->text('info_06_line_id');
            $table->text('info_07_mail');
            $table->text('info_08_school');
            $table->text('info_09_falculty');
            $table->text('info_10_tel');
            $table->text('info_11_reason');
            $table->text('info_12_reason_other');
            $table->text('survey_01');
            $table->text('survey_02');
            $table->text('survey02_2_other');
            $table->text('survey_03');
            $table->text('survey03_2_not_hear');
            $table->text('survey_04');
            $table->text('survey_04_2_company');
            $table->text('survey_04_3_hp');
            $table->text('survey_04_4_other');
            $table->text('survey_05');
            $table->text('survey05_2_summer');
            $table->text('survey05_3_autumn');
            $table->text('survey05_4_winter');
            $table->text('survey05_5_1day');
            $table->text('survey05_6_2day');
            $table->text('survey05_7_3day');
            $table->text('survey05_8_1week');
            $table->text('survey05_9_other');
            $table->text('survey05_10_industry');
            $table->text('survey05_11_other');
            $table->text('survey05_12_occupation');
            $table->text('survey05_13_other');
            $table->text('survey05_14_yes');
            $table->text('survey05_15_no');
            $table->text('survey_06');
            $table->text('survey06_2_event');
            $table->text('survey06_3_other');
            $table->text('survey_07');
            $table->text('survey07_2_number');
            $table->text('survey07_3_industry');
            $table->text('survey07_4_other');
            $table->text('survey07_5_occupation');
            $table->text('survey07_6_other');
            $table->text('survey_08');
            $table->text('survey08_2_number');
            $table->text('survey08_3_industry');
            $table->text('survey08_4_other');
            $table->text('survey08_5_occupation');
            $table->text('survey08_6_other');
            $table->text('survey08_7_civil');
            $table->text('survey_09');
            $table->text('survey09_2_number');
            $table->text('survey09_3_ind_occ');
            $table->text('survey_10');
            $table->text('survey10_2_when');
            $table->text('survey10_03_other');
            $table->text('survey_11');
            $table->text('survey11_2_other');
            $table->text('survey_12');
            $table->text('survey12_2_declining');
            $table->text('survey12_3_choice1');
            $table->text('survey12_4_choice2');
            $table->text('survey12_5_choice3');
            $table->text('survey12_6_choice');
            $table->text('survey12_7_location');
            $table->text('survey12_8_location_choice1');
            $table->text('survey12_9_location_choice2');
            $table->text('survey12_10_location_choice3');
            $table->text('survey12_11_location_choice');
            $table->text('survey12_99_reason');
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
        Schema::dropIfExists('ankets');
    }
}
