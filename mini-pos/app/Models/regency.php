<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class regency extends Model
{
    use HasFactory;
    protected $primaryKey = 'province_id';
    public $incrementing = false;
}
