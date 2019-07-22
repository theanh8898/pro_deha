<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laptop extends Model
{
    protected $table = 'laptops';
    protected $fillable = ['name', 'chip', 'card', 'number'];

    
}
