<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'lrn',
        'stu_lname',
        'stu_fname',
        'stu_mname',
        'stu_suffix',
        'stu_address',
        'stu_birthdate',
        'stu_gender',
        'stu_form137',
        'stu_birthcerti',
        'stu_status',
    ];

}
