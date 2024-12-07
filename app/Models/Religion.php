<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Religion extends Model
{
    protected $guarded;
    public function Student()
    {
        return $this->hasMany(Student::class);
    }
}
