<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class car extends Model
{
    protected $fillable = ['number','brand','type','year','gas','capacity','price_per_day'];
    protected $table = 'cars';
    public $timestamps = false;
}
