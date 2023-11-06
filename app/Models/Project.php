<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable =['Skill_Id','Name','Image','Project_Url'];
    
    public function Skill() 
    {
        return $this ->belongsTo(Skill::class);
    }
}
