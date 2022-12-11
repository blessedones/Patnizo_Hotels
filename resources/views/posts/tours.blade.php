@extends('base')
 
@section('title', 'Booking')
 
@section('Main')
<a href="{{route('tours.create')}}" class="btn btn-success" >Create New</a>
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
      <th scope="col">tourId</th>
      <th scope="col">startDate</th>
      <th scope="col">endDate</th>
      <th scope="col">location</th>
      <th scope="col">amountTopay</th>
      <th scope="col">CustomerId</th>
      <th scope="col">FirstName</th>
      <th scope="col">LastName</th>
      
      
      
    </tr>
  </thead>
  <tbody>
  @foreach($tour_service as $tour)
  @foreach ($tour->customers as $customer)

    <tr>
      <th scope="row">{{$tour->tourId}}</th>
      <td>{{$tour->startDate}}</td>
      <td>{{$tour->endDate}}</td>
      <td>{{$tour->location}}</td>
      <td>{{$tour->amountTopay}}</td>
      <td>{{$customer->customerId}}</td>
      <td>{{$customer->FirstName}}</td>
      <td>{{$customer->LastName}}</td>
      
      
      
      <td>
        <a href="{{route('tours.show',$tour)}}" class="btn btn-success">View</a>
        <a href="{{route('tours.edit',$tour)}}" class="btn btn-primary"  >Update</a>
        <form action="{{route('tours.destroy',$tour)}}"method="POST" style="display: contents;">
         @csrf
         @method('DELETE')
        <button type="submit "id="detbut"  class="btn btn-danger" >Delete</button>
        </form>
      </td>
    </tr>
   @endforeach
   @endforeach
</tbody>
</table>
@endsection

