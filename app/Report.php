<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Report extends Model
{
     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'reports';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'content','user_id','worked_on','work_type'];
    
    public function setWorkedOnAttribute($date){
        
        
       $this->attributes['worked_on'] =Carbon::createFromFormat('Y-m-d',$date);
        
    }
     /**
     * The reports belongs to single user.
     *
     * @var array
     */
    
     public function user(){
        
        return $this->belongsTo('App\User');
        
    }
//     public function attendences(){
//        
//        return $this->hasMany('App\');
//        
//    }
    
    
   
}
