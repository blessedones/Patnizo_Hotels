<?php

namespace App\Http\Controllers;
use App\Models\payment;
use App\Models\customers;
use Illuminate\Http\Request;

class paymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
     $payment = payment::with('customers')->get();
     
     $customers = customers::with('payment')->get();
     
     return view('admin.payments.index', compact('payment', 'customers'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $payId
     * @return \Illuminate\Http\Response
     */
    public function show($payId)
    {
       $payment=payment::where('payId',$payId)->first();
       return view('admin.payments.view',compact('payment'));
       


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $payId
     * @return \Illuminate\Http\Response
     */
    public function edit($payId)
    {
        $payment=payment::where('payId',$payId)->first();
        return view('admin.payments.edit', compact('payment')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $payId
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $payId)
    {
        $request->validate([
            'payfor'=>'required',
            'amount'=>'required',
            'whopay'=>'required'
            
        ]);

        $payment=payment::where('payId',$payId)->first();
        $payment->payment_for =  $request->get('payfor');
        $payment->Amount = $request->get('amount');
        $payment->customerId = $request->get('whopay');
        
        $payment->save();
        return back()->with('message', 'Payment Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $payId
     * @return \Illuminate\Http\Response
     */
    public function destroy($payId)
    {
        $payment=payment::where('payId',$payId)->first();
        $payment->delete();
        return back()->with('message', 'Payment Deleted!');
    }

    
}

