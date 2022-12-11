<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tour_service extends Model
{
    use HasFactory;

    protected $primaryKey='tourId';
    protected $table='tour_service';
    protected $guarded=[];
    
    protected $fillable = [
     
     'startDate',
     'endDate',
     'location',
     'amountTopay'
 ];




    public function customers()
    { 
    
 return $this->belongsToMany(customers::class, 'customers_tour_service','tourID','customerId');
    
   }
}
