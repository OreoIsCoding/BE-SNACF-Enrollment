<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubjectAlias extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'subject_id',
        'course_id',
        'display_name'
    ];

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

}
