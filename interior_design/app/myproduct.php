<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class myproduct extends Model
{
    protected $table = 'myproduct';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    // public $timestamps = true;
    
    public function myproduct(){
        return $this->belongsTo('App\Myproduct');
    }
}
