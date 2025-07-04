<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class home extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'image',
        'address',
        'date',
        'text',
    ];
}
