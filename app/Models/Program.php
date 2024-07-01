<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image_url',
        'description',
        'duration',
        'study_mode',
        'intake',
        'fee_per_year',
        'scholarship_percentage',
        'scholarship_fee_per_year',
        'university_id',
        'degree_id',
        'department_id',
    ];

    // Relationships
    public function university()
    {
        return $this->belongsTo(University::class);
    }

    public function degree()
    {
        return $this->belongsTo(Degree::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
