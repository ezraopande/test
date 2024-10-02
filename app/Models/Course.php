<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        'language',        // Add this line
        'skill_level',     // Add this line
        'location',        // Add this line
        'certificate',     // Add this line
        'assessments',     // Add this line
    ];
    
}
