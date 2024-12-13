<?php

namespace App\Models\admin\nav;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compiler extends Model
{
    use HasFactory;

    protected $table = 'compiler';

    protected $fillable = [
        'description'
    ];
}
