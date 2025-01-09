<?php

namespace App\Student\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeesModel extends Model
{
    use HasFactory;

    protected $table = 'student_fees';

    protected $primaryKey = 'fee_id';

    protected $timestamps = True;

    protected $fillable = [

        'student_id',
        'amount',
        'payment_date',
        'status',
        
    ];
}
