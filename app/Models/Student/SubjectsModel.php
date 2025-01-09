<?php

namespace App\Student\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubjectsModel extends Model
{
    use HasFactory;

    protected $primaryKey = 'subject_id';

    protected $table = 'subjects';

    protected $timestamps = True;

    protected $fillable = [
        'course_id',
        'subject_name',
        'subject_description',
    ];
}
