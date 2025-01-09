<?php

namespace App\Student\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoursesModel extends Model
{
    use HasFactory;

    protected $primaryKey = 'course_id';
    protected $table = 'courses';

    public $timestamps = True;

    protected $fillable = [
        'course_name',
        'course_description',
        'duration',
        'credits'

    ];

}
