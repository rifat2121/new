<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class z extends Model
{
    use HasFactory;
    protected $table='z';
    protected $fillable=['message'];
}
