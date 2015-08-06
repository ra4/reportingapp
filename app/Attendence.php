<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendence extends Model
{
      /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'attendences';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     * work_type => 1 (Full day), 2 (Half day), 3 (work from home)
     */
    protected $fillable = ['user_id', 'report_id','work_type'];
    
    
     /**
     * The reports belongs to single user.
     *
     * @var array
     */
    
     public function user(){
        
        return $this->belongsTo('App\User');
        
    }
    
     public function report(){
        
        return $this->belongsTo('App\Report');
        
    }
}

