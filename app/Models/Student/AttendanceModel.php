<?php

namespace App\Student\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendanceModel extends Model
{
    //
    use HasFactory;

    protected $primaryKey = 'attendance_id';

    protected $table = 'attendance';

    protected $timestamps = True;


    protected $fillable = [
        'status',
        'student_id',
        'course_id',
        'subject_id',
        'class_date',
    ];
}
