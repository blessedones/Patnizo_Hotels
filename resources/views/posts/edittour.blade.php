@extends('base')
 
@section('title', 'Update')

@section('Main')

<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h2 class="display-3">Edit Tour</h2>

@if($errors->any())
<div class="div" class="alert alert-danger">
<ul style="color:red;">

@foreach($errors->all() as $error)
<li style="color:red;">{{$error}}</li>
@endforeach

</ul>
</div>
<br />
@endif

     
<form method="POST" action="{{ route('tours.update',$tour_service->tourId) }}">
@method('PUT')    
@csrf
   

<div class="mb-3">

    <label for="payfor" class="form-label">startDate</label>
    <input type="date" class="form-control"  name="startdate" value= "{{$tour_service->startDate}}"/>
  </div>
  <div class="mb-3">
    <label for="amount" class="form-label">endDate</label>
    <input type="date" class="form-control"  name="enddate" value="{{$tour_service->endDate}}"/>
  </div>
  <div class="mb-3">
    <label for="id" class="form-label">location</label>
    <input type="text" class="form-control"  name="location" value="{{ $tour_service->location}}"/>
  </div>
  <div class="mb-3">
    <label for="currency" class="form-label">amountTopay</label>
    <input type="currency" class="form-control"  name="amount" value="{{$tour_service->amountTopay}}"/>
  </div>
  <div class="mb-3">
    <label for="customer" class="form-label">CustomerId</label>
<input type="number" class="form-control" name="whotoured" placeholder="Enter the CustomerId To Fetch Details"/>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>

</form>

</div>
</div>
@endsection
