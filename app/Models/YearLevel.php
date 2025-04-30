<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class YearLevel extends Model
{
    use HasFactory;

    protected $fillable = ['year'];

    public function courseSubjects()
    {
        return $this->hasMany(CourseSubject::class, 'year_id');
    }
}
