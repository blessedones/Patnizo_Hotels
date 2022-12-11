@extends('base')
 
@section('title', 'View Booking')

@section('Main')


<div class="col-sm-12">

  @if(session()->get('success'))
    <div class="alert alert-success mt-3">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>
<html>
  <head>
  <link rel="stylesheet"href="{{asset('css/app.css')}}">
  <style>
    p{font-size:20px;}
    h3{color:red;}
    .gsb
    {
      margin-left:200px;
    }
  </style>
  </head>
    <body>
<div class="gsb">

  <h3>{{$booking->BookId}}.</h3>
  <p>{{$booking->startDate}}</p>
  <p>{{$booking->endDate}}</p>
  <p>{{$booking->whatBooked}}</p>
  <p>{{$booking->amountTopay}}</p>
  <p>{{$booking->customers}}</p>
</div>

</body>
</html>

@endsection