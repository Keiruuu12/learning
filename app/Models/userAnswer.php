<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userAnswer extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];

    public function practiceForm()
    {
        $this->belongsTo(PracticeForm::class);
    }
}
