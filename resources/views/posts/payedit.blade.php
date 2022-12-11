@extends('base')
 
@section('title', 'Update')

@section('Main')

<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h2 class="display-3">Edit Payment</h2>

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

     
<form method="POST" action="{{ route('pays.update',$payment->payId) }}">
@method('PUT')    
@csrf
   

<div class="mb-3">

    <label for="payfor" class="form-label">Payment_for</label>
    <input type="text" class="form-control"  name="payfor" value= "{{$payment->payment_for}}"/>
  </div>
  <div class="mb-3">
    <label for="amount" class="form-label">Amount	</label>
    <input type="currency" class="form-control"  name="amount" value="{{$payment->Amount}}"/>
  </div>
  <div class="mb-3">
    <label for="id" class="form-label">CustomerId</label>
    <input type="number" class="form-control"  name="whopay" value="{{ $payment->customers->customerId}}"/>
  </div>
  <div class="mb-3">
    <label for="Firstname" class="form-label">FirstName</label>
    <input type="text" class="form-control"  name="firstname" value="{{$payment->customers->FirstName}}"/>
  </div>
  <div class="mb-3">
    <label for="lastname" class="form-label">LastName</label>
    <input type="text" class="form-control" name="lname" value="{{$payment->customers->LastName}}" />
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>

</form>

</div>
</div>
@endsection
