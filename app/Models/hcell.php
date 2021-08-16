<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hcell extends Model
{
    use HasFactory;
      protected $table='hcell';
    protected $fillable=['email','name','message'];
}
