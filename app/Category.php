<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //

    public function jobs(){
    	return $this->belongsToMany(Job::class,'jobs_categories','category_id');
    }
}
