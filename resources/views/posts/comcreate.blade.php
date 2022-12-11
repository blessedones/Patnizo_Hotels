@extends('base')
 @section('title', 'Register')
 
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

<form method="POST" action="{{route('coms.store')}}">
    @csrf
<div class="mb-3">
    <label for="" class="form-label">FullName</label>
    <input type="text" class="form-control" id="fn" name="fullname">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="em" name="email">
  </div>

  <div class="mb-3">
    <label for="message" class="form-label">Message</label>
    <input type="text" class="form-control" id="pass" name="message">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection

