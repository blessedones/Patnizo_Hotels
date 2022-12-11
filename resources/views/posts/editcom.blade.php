@extends('base')
 
@section('title', 'Update')

@section('Main')

<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h2 class="display-3">Change Comment</h2>

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

     
<form method="POST" action="{{ route('coms.update',$comment->comId) }}">
@method('PUT')    
@csrf
   

<div class="mb-3">

    <label for="firstname" class="form-label">FullName</label>
    <input type="text" class="form-control" id="fn" name="fullname" value= "{{ $comment->fullName}}"/>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="em" name="email" value="{{ $comment->Email}}"/>
  </div>
  <div class="mb-3">
    <label for="comment" class="form-label">Message</label>
    <input type="comment" class="form-control" id="comm" name="message" value="{{ $comment->Message}}"/>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>

</form>

</div>
</div>
@endsection
