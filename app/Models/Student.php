<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_number',
        'first_name',
        'middle_name',
        'last_name',
        'address',
        'gender',
        'civil_status',
        'birthday',
        'father_name',
        'mother_name',
        'contact_no',
        'course_id',
        'year',
        'semester',
        'status',
        'reference_number'
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
