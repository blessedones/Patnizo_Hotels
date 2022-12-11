<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\payment;
use App\Models\booking;
use App\Models\customers_booking;
class customers extends Model
{
    use HasFactory;

    protected $guarded=[];
    protected $primaryKey='customerId';
    protected $table='customers';

   
    

    protected $fillable = [
        'customerId',
        'FirstName',
        'LastName',
        'Email',
        'Telephone',
        'Password'   
    ];





    public function payment()
    {
        return $this->hasMany(payment::class,'customerId', 'customerId');
    
    }


 public function tour_service()
    {
        return $this->belongsToMany(tour_service::class, 'customers_tour_service','customerId','tourId');
    }

    public function booking()
    {
       
        return $this->belongsToMany(booking::class,'customers_booking','customerId','BookId');
    }
   
    
}
