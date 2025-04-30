<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CourseSubject extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'subject_id',
        'year_id',
        'status'
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function yearLevel()
    {
        return $this->belongsTo(YearLevel::class, 'year_id');
    }
}
