<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    //relcion de uno a muchos inversa
    public function product(){
        return $this->belongsTo('App\Models\Product');
    }
}
