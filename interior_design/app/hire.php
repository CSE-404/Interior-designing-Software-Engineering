<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hire extends Model
{
        // Table Name
    protected $table = 'hire';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    // public $timestamps = true;
    
    public function hire(){
        return $this->belongsTo('App\Hire');
    }
}