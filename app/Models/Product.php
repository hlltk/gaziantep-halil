<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='products';
    protected $fillable=['category_id','name','price','photo','description','status','created_by'];


    public function user(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany('App\Models\User','id','created_by');
    }

    public function CategoryDatabase()
    {
        return $this->hasMany('App\Models\Category','id','category_id');
    }

}
