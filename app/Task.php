<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['id', 'name', 'description','project_id','user_id','days','hour','company_id'];

 public function user(){
        return $this->belongsTo('App\Models\User');
    }
     public function project(){
        return $this->belongsTo('App\Models\Project');
    }
     public function company(){
        return $this->belongsTo('App\Models\Company');
    }
}