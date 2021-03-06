<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorCourse extends Model
{
    use HasFactory;
    protected $table='doctor';
    
    public function course()
    {
        return $this->belongsTo(Course::class , 'course_id');
    }
    public function team()
    {
        return $this->belongsTo(Team::class , 'team_id');
    }

}
