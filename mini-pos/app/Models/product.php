<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'uuid';

    use HasFactory;
    protected $fillable = ['id','name','category','sku','cost','price'];


    public function purcprod()
    {
        return $this->belongsToMany(purchase::class,'purchases_products','product_id','purchases_id');
    }
    public function saleprod()
    {
        return $this->belongsToMany(sale::class,'sales_products','product_id','sale_id');
    }
}
