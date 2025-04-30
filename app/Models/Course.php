<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'course_subjects')
            ->withPivot('year_id', 'status')
            ->withTimestamps();
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
