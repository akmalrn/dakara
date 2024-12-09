<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = 'services';

    protected $fillable = [
        'path',
        'title',
        'overview',
        'description',
        'category_id',
    ];

    // Relasi ke CategoryService
    public function category()
    {
        return $this->belongsTo(CategoryService::class);
    }
}
