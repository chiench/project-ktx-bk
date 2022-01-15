<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    protected $fillable =[

        'mssv',
        'name',
        'phone',
        'email',
        'room_id'
    ];

}
