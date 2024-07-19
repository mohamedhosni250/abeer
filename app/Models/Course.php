<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Course extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'image', 'course_category_id'];



    public function getFeaturedImageUrlAttribute()
    {
        return Storage::url($this->attributes['image']);
    }
    public function courseCategory()
    {
        return $this->belongsTo(CourseCategory::class, 'course_category_id');
    }
    public function videos()
    {
        return $this->hasMany(CourseVideo::class);
    }
}
