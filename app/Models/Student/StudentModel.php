<?php

namespace App\Student\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class StudentModel extends Model
{
    use HasFactory;

    protected $table = 'students';

    protected $primaryKey = 'student_id';

    protected $timestamps = True;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'date_of_birth',
        'gender',
        'address',
        'course_program',
        'date_registered',
    ];

    protected $casts = [
        'date_of_birth' => 'date',
        'date_registered' => 'date',
    ];

}
