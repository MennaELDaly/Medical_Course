<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $table='doctor';

    public function courses()
    {
        return $this->hasMany(Course::class , 'course_id');
    }
}
