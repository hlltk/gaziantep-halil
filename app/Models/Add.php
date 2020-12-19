<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Add extends Model
{
    use HasFactory;
    protected $table='products';
    protected $fillable=['category_id','name','price','photo','description','status','created_by','phone'];
}


