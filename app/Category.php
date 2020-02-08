<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table ='category';
    protected $primaryKey = 'category_id';

    protected $fillable = [
        'category_name'
    ];

    public function product(){
    	return $this->hasMany('App\Product','product_category','category_id');
    }
}
