<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NearestSchedule extends Model
{
    use HasFactory;

    protected $table = 'nearest_schedule';

    protected $fillable = [
        'path',
        'date',
    ];
}
