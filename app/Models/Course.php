<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $table='courses';
    
    public function Course_DoctorCourse()
    {
        return $this->hasMany(DoctorCourse::class);
    }

    public function Department()
    {
        return $this->belongsTo(Department::class , 'department_id');
    }
}
