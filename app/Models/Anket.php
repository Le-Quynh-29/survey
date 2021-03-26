<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anket extends Model
{
    use HasFactory;

    protected $fillable =
        [
          'schedule_id',
          'status',
          'info_01_date',
          'info_02_furigana_last_name',
          'info_03_furigana_name',
          'info_04_last_name',
          'info_05_name',
          'info_06_line_id',
          'info_07_mail',
          'info_08_school',
          'info_09_falculty',
          'info_010_tel',
          'info_011_reason',
          'info_012_reason_other',
          'survey_01',
          'survey_02',
          'survey02_2_other',
          'survey_03',
          'survey03_2_not_hear',
          'survey_04',
          'survey_04_2_company',
          'survey_04_3_hp',
          'survey_04_4_other',
          'survey_05',
          'survey05_2_summer',
          'survey05_3_autumn',
          'survey05_4_winter',
          'survey05_5_1day',
          'survey05_6_2day',
          'survey05_7_3day',
          'survey05_8_1week',
          'survey05_9_other',
          'survey05_10_industry',
          'survey05_11_other',
          'survey05_12_occupation',
          'survey05_13_other',
          'survey05_14_yes',
          'survey05_15_no',
          'survey_06',
          'survey06_2_event',
          'survey06_3_other',
          'survey_07',
          'survey07_2_number',
          'survey07_3_industry',
          'survey07_4_other',
          'survey07_5_occupation',
          'survey07_6_other',
          'survey_08',
          'survey08_2_number',
          'survey08_3_industry',
          'survey08_4_other',
          'survey08_5_occupation',
          'survey08_6_other',
          'survey08_7_civil',
          'survey_09',
          'survey09_2_number',
          'survey09_3_ind_occ',
          'survey_10',
          'survey10_2_when',
          'survey10_03_other',
          'survey_11',
          'survey11_2_other',
          'survey_12',
          'survey12_2_declining',
          'survey12_3_choice1',
          'survey12_4_choice2',
          'survey12_5_choice3',
          'survey12_6_choice',
          'survey12_7_location',
          'survey12_8_location_choice1',
          'survey12_9_location_choice2',
          'survey12_10_location_choice3',
          'survey12_11_location_choice',
          'survey12_99_reason'
        ];

    public function schedules()
    {
        return $this->belongsTo(Schedule::class, 'schedule_id');
    }

}
