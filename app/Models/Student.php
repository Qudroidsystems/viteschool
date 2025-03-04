<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

    use HasFactory;
    protected $table = "studentRegistration";
    //protected $primaryKey = "admissionNo";

    protected $fillable = [
        'userid',
        'tittle',
        'firstname',
        'lastname',
        'othername',
        'gender',
        'home_address',
        'home_address2',
        'placeofbirth',
        'dateofbirth',
        'age',
        'religion',
        'state',
        'local',
        'last_school',
        'last_class',
        'registeredBy',
        'statusId',

    ];
}
