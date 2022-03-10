<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LawaehShateb extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'last_name',
        'father_name',
        'mother_name',
        'birthdate',
        'gender',
        'mazhab',
        'kayd_number',
        'muhafaza',
        'kadae',
        'mulahazat',
    ];
}
