@extends('base')
 
@section('title', 'Viewing')

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

  <h3>{{$customers->customerId}}.</h3>
  <p>{{$customers->FirstName}} {{$customers->LastName}}</p>
  <p>{{$customers->Email}}</p>
  <p>{{$customers->Telephone}}</p>
  <p>{{$customers->Password}}</p>
</div>

</body>
</html>

@endsection