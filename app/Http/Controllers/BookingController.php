<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\booking;
use App\Models\customers;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    $booking=booking::with('customers')->get(); 
    $customers = customers::with('booking')->get();
    
    return view('admin.booking.index', compact('booking', 'customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
      return view('admin.booking.create');
        

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        

        $request->validate([
            'startdate'=>'required',
            'enddate'=>'required',
            'whatbooked'=>'required',
            'amount'=>'required',
            
        ]);


        
        
        $booking = new booking();
        $booking->startDate= $request->input('startdate');
        $booking->endDate= $request->input('enddate');
        $booking->whatBooked= $request->input('whatbooked');
        $booking->amountTopay= $request->input('amount');
        $customers=$request->input('whobooked');
        $booking->save();
        $booking->customers()->attach($customers);
        return back()->with('message', 'Booked Successfuly!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $BookId
     * @return \Illuminate\Http\Response
     */
    public function show($BookId)
    {
        $booking=booking::where('BookId',$BookId)->first();
       return view('admin.booking.view',compact('booking'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $BookId
     * @return \Illuminate\Http\Response
     */
    public function edit($BookId)
    {
        $booking=booking::where('BookId',$BookId)->first();


        return view('admin.booking.edit', compact('booking')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $BookId
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $BookId)
    {
        $request->validate([
            'startdate'=>'required',
            'enddate'=>'required',
            'whatbooked'=>'required',
            'amount'=>'required',
            
        ]);

        $booking=booking::where('BookId',$BookId)->first();
        

        $booking->startDate =  $request->get('startdate');
        $booking->endDate = $request->get('enddate');
        $booking->whatBooked = $request->get('whatbooked');
        $booking->amountTopay= $request->get('amount');
        $booking->save();

  return back()->with('message', 'Booking Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $BookId
     * @return \Illuminate\Http\Response
     */
    public function destroy($BookId)
    {
        // $booking=booking::find($BookId);
        $booking=booking::where('BookId',$BookId)->first();
        $booking->delete();
        $booking->customers()->detach($BookId);
        return back()->with('message', 'Booking Deleted!!');

       
    }
}
