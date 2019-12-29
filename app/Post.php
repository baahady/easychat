<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable=['body'];

    protected $appends=['HumanCreatedAt'];

    public function user(){
    	return $this->belongsTo('app\User');
    }

    public function getHumanCreatedAtAttribute(){
    	return $this->created_at->diffForHumans();
    }
}
