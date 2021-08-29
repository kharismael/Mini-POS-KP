<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class sale extends Model
{
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'uuid';
    use HasFactory;

    protected $fillable = [
        'id',
        'customer_id',
        'invoice',
        'transaction_date',
        'price_total'
    ];

    public function sale()
    {
        return $this->belongsToMany(product::class, 'sales_products', 'sale_id', 'product_id')->withTimestamps()->withPivot(['price', 'quantity', 'id']);
    }
}
