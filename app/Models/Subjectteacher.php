<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subjectteacher extends Model
{
    use HasFactory;
    protected $table = "subjectteacher";
    //protected $primaryKey = "userid";

    protected $fillable = [
        'userid',
        'staffid',
        'subjectid',
        'termid',
        'sessionid'

    ];
}
