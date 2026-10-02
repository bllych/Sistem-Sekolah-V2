<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

#[Fillable('nis', 'name', 'gender', 'major', 'class')]
#[Table('students')]
class Student extends Model
{
    // protected $table = 'students';

    // protected $fillable = [
    //     'nis',
    //     'name',
    //     'gender',
    //     'major',
    //     'class',
    // ];

    
}
