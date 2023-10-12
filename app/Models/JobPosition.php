<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobPosition extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'short_name',
        'job_level',
    ];

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }
}
