<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_key',
        'title',
        'cover',
        'content',
        'didactic_material',
        'robotics_kit_id',
    ];

    public function roboticsKit()
    {
        return $this->belongsTo(RoboticsKit::class);
    }

    public function groups()
    {
        return $this->belongsToMany(Group::class, 'course_groups');
    }
}