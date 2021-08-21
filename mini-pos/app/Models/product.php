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
}
