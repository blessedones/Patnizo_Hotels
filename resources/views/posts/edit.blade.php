@extends('base')
 
@section('title', 'Update')

@section('Main')

<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h2 class="display-3">Update a Customer</h2>

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

     
<form method="POST" action="{{ route('posts.update',$customers->customerId) }}">
@method('PUT')    
@csrf
   

<div class="mb-3">

    <label for="firstname" class="form-label">FirstName</label>
    <input type="text" class="form-control" id="fn" name="firstname" value= "{{ $customers->FirstName}}"/>
  </div>
  <div class="mb-3">
    <label for="lastname" class="form-label">LastName</label>
    <input type="text" class="form-control" id="ln" name="lastname" value="{{ $customers->LastName}}"/>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="em" name="customeremail" value="{{ $customers->Email}}"/>
  </div>
  <div class="mb-3">
    <label for="telephone" class="form-label">Telephone</label>
    <input type="telephone" class="form-control" id="tel" name="telephone" value="{{ $customers->Telephone}}"/>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="pass" name="password" value="{{ $customers->Password}}"/>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>

</form>

</div>
</div>
@endsection
