<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    use HasFactory;

    protected $table = 'contact';

    protected $fillable = [
        'phone_number',
        'phone_number_2',
        'email_address',
        'email_address_2',
        'email_address_3',
        'address',
        'map',
    ];
}
