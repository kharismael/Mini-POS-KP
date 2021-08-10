<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'uuid';
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'email',
        'address',
        'telp',
<<<<<<< HEAD
        'village_id',
=======
        'vilalge_id'
>>>>>>> 836108f1bbdaa464c1fc100d8598728638d66d9f
    ];
}
