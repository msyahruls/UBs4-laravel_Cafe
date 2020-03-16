<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $table ='product';
    protected $primaryKey = 'product_id';

    protected $fillable = [
        'product_name', 'product_category', 'product_price', 'product_image'
    ];

    public function category(){
    	return $this->belongsTo('App\Category','product_category','category_id');
    }
}
