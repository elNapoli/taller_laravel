<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeJob extends Model
{
    //
    public function jobs(){
    	return $this->hasMany('jobs_categories','category_id');
    }
}
