@extends('base')
 
@section('title', 'Welcome to First Page')
 
@section('Main')

<h3 class="display-3">Comments</h3>
<a href="{{route('coms.create')}}" class="btn btn-success" >Create New</a>
<div class="col-sm-12">

  @if(session()->get('success'))
    <div class="alert alert-success mt-3">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>

<table class="table mt-3" >
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">FullName</th>
      <th scope="col">Email</th>
      <th scope="col">Message</th>
    </tr>
  </thead>
  <tbody>
  @foreach($comment as $comm)
    <tr>
      <th scope="row">{{$comm->	comId}}</th>
      <td>{{$comm->fullName}}</td>
      <td>{{$comm->Email}}</td>
      <td>{{$comm->Message}}</td>
      <td>
        <a href="{{route('coms.show',$comm)}}" class="btn btn-success">View</a>
        <a href="{{route('coms.edit',$comm)}}" class="btn btn-primary"  >Update</a>
        <form action="{{route('coms.destroy',$comm)}}"method="POST" style="display: contents;">
         @csrf
         @method('DELETE')
        <button type="submit "id="detbut"  class="btn btn-danger" >Delete</button>
        </form>
      </td>
    </tr>
   @endforeach
</tbody>
</table>
@endsection

