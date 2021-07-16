<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    protected $table = 'Classroom';
    public $timestamps = false;
    public $primaryKey = 'Id_Class';
}

class Course extends Model
{
    protected $table = 'course';
    public $timestamps = false;
    public $primaryKey = 'Id_Course';
}

class Subject extends Model
{
    protected $table = 'subject';
    public $timestamps = false;
    public $primaryKey = 'Id_Subject';
}