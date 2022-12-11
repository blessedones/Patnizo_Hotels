@extends('base')
 
@section('title', 'View Tour')

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

  <h3>{{$tour_service->tourId}}.</h3>
  <p>{{$tour_service->startDate}}</p>
  <p>{{$tour_service->endDate}}</p>
  <p>{{$tour_service->location}}</p>
  <p>{{$tour_service->amountTopay}}</p>
  <p>{{$tour_service->customers}}</p>
</div>

</body>
</html>

@endsection