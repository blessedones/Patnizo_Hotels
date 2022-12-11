<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customers_tour_service extends Model
{
    use HasFactory;

    protected $primaryKey='custtourId';
    protected $guarded=[];
    protected $table='customers_tour_service';

}
