<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class district extends Model
{
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'uuid';
    const CREATED_AT = 'created-at';
    const UPDATED_AT = 'updated-at';
    use HasFactory;
}
