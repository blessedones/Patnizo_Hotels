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

  <h3>{{$comment->comId}}.</h3>
  <p>{{$comment->fullName}}</p>
  <p>{{$comment->Email}}</p>
  <textarea name="comm" id="comms" cols="30" rows="10">{{$comment->Message}}</textarea>
</div>

</body>
</html>

@endsection