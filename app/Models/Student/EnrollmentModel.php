<?php

namespace App\Student\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnrollmentModel extends Model
{
    use HasFactory;

    protected $primaryKey = 'enrollment_id';

    protected $table = 'enrollment';


    protected $timestamps = True;


    protected $fillable = [

        'student_id',
        'course_id',
        'enrollment_date',
        'status',
    ];
    
}
