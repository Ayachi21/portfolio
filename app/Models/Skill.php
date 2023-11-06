<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;
    protected $fillable =['Name','Image'];

    public function Project() 
    {
        return $this ->hasMany(Project::class);
    }
}
