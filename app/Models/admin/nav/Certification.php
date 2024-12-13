<?php

namespace App\Models\admin\nav;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    use HasFactory;

    protected $table = 'certification';

    protected $fillable = [
        'description',
    ];
}
