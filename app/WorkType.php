<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkType extends Model
{
    
     protected $table = 'work_types';
     
     
     protected $fillable = ['id', 'name'];
     
     
    public function attendence()
    {
        return $this->hasOne('App\Attendence','id','work_type_id');
    }

}

