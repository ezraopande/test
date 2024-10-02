<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str; // Import Str facade

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
        'requirements',
        'requirement1',
        'requirement2',
        'requirement3',
        'experience',
        'duration',
        'language',
        'skill_level',
        'location',
        'certificate',
        'assessments',
        'category', // Ensure category is included
        'slug',
        'price' // Add price here
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($course) {
            $course->slug = Str::slug($course->title); // Use Str::slug instead of str_slug
        });
    }
}
