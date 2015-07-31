<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
    protected $fillable = ['title', 'content','user_id','worked_on'];
    
    
     /**
     * The reports belongs to single user.
     *
     * @var array
     */
    
     public function user(){
        
        return $this->belongsTo('App\User');
        
    }
    
   
}
