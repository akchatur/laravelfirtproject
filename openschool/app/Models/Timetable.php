<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timetable extends Model
{
    use HasFactory;
    protected $table="rs_timetables";
    public $timestamps=false;
protected $fillable=[
    'id',
    'course',
    'subjects',
    'subject_type',
    'exam_date',
    'exam_time_start',
    'exam_time_end',
    'status',
    'deleted',
    'deleted_date',
    'exam_event',
    'academic_session',
    'stream'

];
}
