<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class humansinfo extends Model
{
    protected $fillable = [
        'id','first_name', 'middle_name', 'last_name','email','age','gender','address'
    ];
}
