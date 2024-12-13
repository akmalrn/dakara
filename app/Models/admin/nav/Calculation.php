<?php

namespace App\Models\admin\nav;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calculation extends Model
{
    use HasFactory;

    protected $table = 'calculation';

    protected $fillable = [
        'description',
    ];
}
