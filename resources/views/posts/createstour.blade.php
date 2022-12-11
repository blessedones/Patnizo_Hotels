@extends('base')
 @section('title', 'Make a New Tour')
 
@section('Main')


<div>
@if($errors->any())
<ul>
<div class="div" class="alert alert-danger">
@foreach($errors->all() as $error)
<li>{{$error}}</li>
@endforeach
</ul>
</div>
@endif

<form method="POST" action="{{route('tours.store')}}">
    @csrf
<div class="mb-3">
    <label for="" class="form-label">startDate</label>
    <input type="date" class="form-control" id="fn" name="startdate">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">endDate</label>
    <input type="date" class="form-control" id="ln" name="enddate">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">location</label>
    <input type="text" class="form-control" id="em" name="location">
  </div>
  <div class="mb-3">
    <label for="telephone" class="form-label">amountTopay</label>
    <input type="currency" class="form-control" id="tel" name="amount">
  </div>


  
  <div class="mb-3">
  
 
    <label for="telephone" class="form-label">CustomerId</label>
    <input type="number" class="form-control" id="tel" name="whotoured">
   
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@endsection

