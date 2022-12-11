<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tour_service;
use App\Models\customers;


class TourserviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tour_service=tour_service::with('customers')->get();

    return view('posts.tours', compact('tour_service'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
        $tour_service=tour_service::all();
    

        return view('posts.createstour', compact('tour_service'));

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
            'location'=>'required',
            'amount'=>'required'
        ]);

        $tour_service=new tour_service([
           
                'startDate' => $request->get('startdate'),
                'endDate' => $request->get('enddate'),
                'location' => $request->get('location'),
                'amountTopay' => $request->get('amount'),
                
             
        ]);

        $tour_service = new tour_service();
        $tour_service->startDate= $request->input('startdate');
        $tour_service->endDate= $request->input('enddate');
        $tour_service->location= $request->input('location');
        $tour_service->amountTopay= $request->input('amount');
        $customers=$request->input('whotoured');
        $tour_service->save();
        $tour_service->customers()->attach($customers);
        return redirect('/tours')->with('success', 'Tour Accepted Successfuly!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $tourId
     * @return \Illuminate\Http\Response
     */
    public function show($tourId)
    {
    $tour_service=tour_service::where('tourId',$tourId)->first();
       return view('posts.showtour',compact('tour_service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $tourId
     * @return \Illuminate\Http\Response
     */
    public function edit($tourId)
    {
        $tour_service=tour_service::where('tourId',$tourId)->first();
        return view('posts.edittour', compact('tour_service')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $tourId
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $tourId)
    {
        $request->validate([
            'startdate'=>'required',
            'enddate'=>'required',
            'location'=>'required',
            'amount'=>'required',
            
        ]);

        $tour_service=tour_service::where('tourId',$tourId)->first();
        

        $tour_service->startDate =  $request->get('startdate');
        $tour_service->endDate = $request->get('enddate');
        $tour_service->location= $request->get('location');
        $tour_service->amountTopay= $request->get('amount');
        $tour_service->save();

        return redirect('/tours')->with('success', 'tour_service updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $tourId
     * @return \Illuminate\Http\Response
     */
    public function destroy($tourId)
    {
        $tour_service=tour_service::find($tourId);
        $tour_service->delete();
        return redirect('/tours')->with('success', 'Tour deleted!');
    }
}
