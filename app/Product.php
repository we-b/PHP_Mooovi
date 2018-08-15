<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['title', 'image_url'];

    public function reviews()
    {
        return $this->hasMany('App\Review');
    }

    public function review_average()
    {
        return round($this->reviews()->avg('rate'));
    }
}
