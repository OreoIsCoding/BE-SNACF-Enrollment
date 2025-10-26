<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'internal_code',
        'name',
        'units',
        'semester'
    ];

    protected $hidden = ['internal_code'];  // Hide this from API/JSON responses

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'course_subjects')
            ->withPivot('year_id', 'status')
            ->withTimestamps();
    }

    public function aliases()
    {
        return $this->hasMany(SubjectAlias::class);
    }

    public function getNameForCourse($courseId)
    {
        return $this->aliases()
            ->where('course_id', $courseId)
            ->value('display_name') ?? $this->name;
    }
}
