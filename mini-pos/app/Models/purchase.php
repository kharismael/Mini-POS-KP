<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class purchase extends Model
{
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'uuid';
    use HasFactory;

    protected $fillable =[
        'id',
        'supplier_id',
        'invoice',
        'transaction_date',
    ];

    public function purchase()
    {
        return $this->belongsToMany(product::class,'purchases_products','purchases_id','product_id');
    }
}
