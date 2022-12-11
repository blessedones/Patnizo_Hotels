<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\customers;

class payment extends Model
{
    use HasFactory;


   protected $primaryKey='payId';
   protected $table='payment';
    
    protected $fillable = [
        'payId ',
        'payment_for',
        'Amount',
        'customerId'
    ];



    public function customers()
    {

        return $this->belongsTo(customers::class,'customerId');
           
    }

}
