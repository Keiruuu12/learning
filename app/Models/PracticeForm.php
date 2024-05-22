<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PracticeForm extends Model
{
    use HasFactory;

    protected $guarded =['id'];

    public function courseClass()
    {
        $this->hasMany(CourseClass::class);
    }

    public function userAnswer()
    {
        $this->hasMany(userAnswer::class);
    }
}
