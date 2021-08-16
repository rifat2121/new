<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studenta extends Model
{
    use HasFactory;
     protected $table='studenta';
    protected $fillable=['email','name','message'];
}
