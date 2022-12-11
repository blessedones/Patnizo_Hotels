<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customers;
// use Illuminate\Support\Facades\DB;


class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $customers=customers::all();
    

         return view('admin.customers.index', compact('customers'));
     
        // return $customers;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.customers.create');


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
            'firstname'=>'required',
            'lastname'=>'required',
            'customeremail'=>'required',
            'telephone'=>'required',
            'password'=>'required'
        ]);

        $customers=new customers([
           
                'FirstName' => $request->get('firstname'),
                'LastName' => $request->get('lastname'),
                'Email' => $request->get('customeremail'),
                'Telephone' => $request->get('telephone'),
                'Password' => $request->get('password')
             
        ]);

        $customers->save();
      
         return back()->with('message', 'Customer Registered Successfuly!');

       


    
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $customerId
     * @return \Illuminate\Http\Response
     */
    public function show($customerId)
    {   
        
       $customers=customers::where('customerId',$customerId)->first();

       return view('admin.customers.view',compact('customers'));
       

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $customerId
     * @return \Illuminate\Http\Response
     */
    public function edit($customerId)
    
    {

        $customers=customers::where('customerId',$customerId)->first();
        
        return view(' admin.customers.edit',compact('customers')); 
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $customerId
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $customerId)
    {
        // isset($GLOBALS['post']);
        
        $request->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'customeremail'=>'required',
            'telephone'=>'required',
            'password'=>'required'
        ]);

        $customers=customers::where('customerId',$customerId)->first();
        
        $customers->FirstName =  $request->get('firstname');
        $customers->LastName = $request->get('lastname');
        $customers->Email = $request->get('customeremail');
        $customers->Telephone = $request->get('telephone');
        $customers->Password = $request->get('password');
        $customers->save();

        return back()->with('message', 'Customer updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $customerId
     * @return \Illuminate\Http\Response
     */
    public function destroy($customerId)
    {
        $customers=customers::find($customerId);
        $customers->delete();
       
        return back()->with('message', 'Customer Deleted!');
        


    }
}
