<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'student';
    public $timestamps = false;
    public $primaryKey = 'Id_Student';

    public function getGenderNameAttribute(){
        if ($this->Gender == 1) {
            return "Nam";
      } else {
            return "Nữ";
       }
          
}
}

    