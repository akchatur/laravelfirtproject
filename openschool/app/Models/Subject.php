<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $table='rs_subjects';
    const CREATED_AT = 'Created';
   const UPDATED_AT = 'Modified';
    public $timestamps=false;

    protected $fillable=
    ['id',
    'name'=>'',
    'subject_type',
    'sessional_max_marks',
    'practical_type',
    'course',
    'deleted',
    'status',
    'deleted',
    'Created',
    'Modified',
    'subject_code'
         ];
}
