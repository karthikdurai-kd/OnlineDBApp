<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class insertdata extends Model
{
    //
    protected $table= 'insertdata';
    protected $primarykey= 'id';
    protected $guarded=[];
  //  protected $fillable=['Title','Body'];
    public function user(){
    	return $this->belongsTo('App\User');
    }

}
