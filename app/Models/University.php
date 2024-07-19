<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class University extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'location_id',
        'logo',
        'featured_image',
        'starting_fee',
        'ranking',
        'students_count',
        'programs_count',
        'description',
    ];
    protected static function booted()
    {
        static::saving(function ($product) {
            if (empty($product->slug)) {
                $product->slug = Str::slug($product->name);
            }
        });
    }
    public function getLogoUrlAttribute()
    {
        return Storage::url($this->attributes['logo']);
    }

    public function getFeaturedImageUrlAttribute()
    {
        return Storage::url($this->attributes['featured_image']);
    }
    public function programs()
    {
        return $this->hasMany(Program::class);
    }
    public function departments()
    {
        return $this->hasMany(Department::class);
    }
    public function details()
    {
        return $this->hasMany(UniversityDetail::class);
    }
    public function location()
    {
        return $this->belongsTo(Location::class);
    }
}
