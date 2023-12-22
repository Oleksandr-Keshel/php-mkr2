<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Student extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function success(): HasMany
    {
        return $this->hasMany(Success::class, 'student_id','id');
    }
}
