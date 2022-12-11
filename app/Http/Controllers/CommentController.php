<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\comment;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comment=comment::all();
        return view('posts.comment',compact('comment'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
    
        return view('posts.comcreate');

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
            'fullname'=>'required',
            'email'=>'required',
            'message'=>'required'
        ]);

        $comment=new comment([
           
                'fullName' => $request->get('fullname'),
                'Email' => $request->get('email'),
                'Message' => $request->get('message')
                
             
        ]);


        $comment->save();
        return redirect('/coms')->with('success', 'Comment saved Successfuly!');


    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $comId
     * @return \Illuminate\Http\Response
     */
    public function show($comId)
    {
        
        $comment=comment::where('comId',$comId)->first();
       return view('posts.showcom',compact('comment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $comId
     * @return \Illuminate\Http\Response
     */
    public function edit($comId)
    {
        $comment=comment::where('comId',$comId)->first();
        return view('posts.editcom', compact('comment')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $comId
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $comId)
    {
        $request->validate([
            'fullname'=>'required',
            'email'=>'required',
            'message'=>'required'
            
        ]);
          
        $comment=comment::where('comId',$comId)->first();
        

        $comment->fullName =  $request->get('fullname');
        $comment->Email = $request->get('email');
        $comment->Message = $request->get('message');
        $comment->save();

        return redirect('/coms')->with('success', 'Comment changed!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $comId
     * @return \Illuminate\Http\Response
     */
    public function destroy($comId)
    {
        $comment=comment::find($comId);
        $comment->delete();
        return redirect('/coms')->with('success', 'Comment deleted!');
    }
}

