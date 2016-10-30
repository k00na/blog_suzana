<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Post extends Model
{
    //

    protected $fillable = ['title', 'body', 'category_id', 'slug'];
    protected $dates = ['dob'];
    public function category(){

    	return $this->belongsTo('App\Category');
    }

    public function tags(){
    	return $this->belongsToMany('App\Tag');
    }

    public function comments(){

    	return $this->hasMany('App\Comment');
    }

    public function dateOfCreation(){

        $dt = Carbon::createFromTimestamp($this->created_at)->toDateTimeString();
         
        return $dt->toFormattedDateString();
    }



}
