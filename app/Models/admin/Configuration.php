<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    use HasFactory;

    protected $table = 'configuration';

    protected $fillable = [
        'path',
        'path_logo',
        'website_name',
        'title',
        'meta_keywords',
        'meta_descriptions',
        'footer',
    ];
}
