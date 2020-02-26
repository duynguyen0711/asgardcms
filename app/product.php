<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = 'product__products';
    protected $fillable = ['id','name', 'price','description','image'];
}