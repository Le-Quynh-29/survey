<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable =
        [
            'token',
            'date',
            'end_date',
            'status'
        ];

    public function ankets()
    {
        return $this->hasMany(Anket::class, 'schedule_id');
    }
}
