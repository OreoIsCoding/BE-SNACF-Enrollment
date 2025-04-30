<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
        'units'
    ];

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'course_subjects')
            ->withPivot('year_id', 'status')
            ->withTimestamps();
    }
}
