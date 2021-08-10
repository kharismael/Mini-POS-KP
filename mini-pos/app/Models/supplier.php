<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'uuid';
    use HasFactory;
    
    protected $fillable =[
        'id',
        'name',
        'telp',
        'address',
        'village_id',
    ];
}
