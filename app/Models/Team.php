<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $table='doctor';
    
    public function Team_DoctorCourse()
    {
        return $this->hasMany(DoctorCourse::class);
    }
}
