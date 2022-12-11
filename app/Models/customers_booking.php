<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customers_booking extends Model
{
    use HasFactory;
 protected $primaryKey='custbookId';
 protected $table='customers_booking';
    protected $guarded=[];
}
