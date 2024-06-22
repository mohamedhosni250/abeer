<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'location', 'description', 'featured_image', 'logo'
    ];

    public function programs()
    {
        return $this->hasMany(Program::class);
    }
    public function departments()
    {
        return $this->hasMany(Department::class);
    }
}
