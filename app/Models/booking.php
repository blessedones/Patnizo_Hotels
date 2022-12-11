<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\customers;
use App\Models\customers_booking;


class booking extends Model
{
    use HasFactory;
    
    protected $guarded=[];
    protected $primaryKey='BookId';
    protected $table='booking';
   
    
       protected $fillable = [
        
        'startDate',
        'endDate',
        'whatBooked',
        'Telephone',
        'amountTopay'
    ];
   
    

 


public function customers()
{

return $this->belongsToMany(customers::class,'customers_booking','BookId','customerId');

}

}
