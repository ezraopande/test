<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CounterSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'icon',
        'count', // Add count here
        'title',
    ];
}
