<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestimonialClient extends Model
{
    use HasFactory;

    protected $table = 'testimonials_clients';

    protected $fillable = [
        'path',
        'name',
        'position',
        'description',
    ];
}
