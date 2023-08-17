<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function gradeItems()
    {
        return $this->hasMany(GradeItem::class);
    }

    public function enrolments()
    {
        return $this->hasMany(Enrolment::class);
    }
}
