@extends('base')
 
@section('title', 'Booking')
 
@section('Main')
<a href="{{route('books.create')}}" class="btn btn-success" >Create New</a>
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
      <th scope="col">	BookId</th>
      <th scope="col">startDate</th>
      <th scope="col">endDate</th>
      <th scope="col">whatBooked</th>
      <th scope="col">amountTopay</th>
      <th scope="col">CustomerId</th>
      <th scope="col">FirstName</th>
      <th scope="col">LastName</th>
      
      
      
    </tr>
  </thead>
  <tbody>
  @foreach($booking as $book)
  @foreach ($book->customers as $customer)

    <tr>
      <th scope="row">{{$book->BookId}}</th>
      <td>{{$book->startDate}}</td>
      <td>{{$book->endDate}}</td>
      <td>{{$book->whatBooked}}</td>
      <td>{{$book->amountTopay}}</td>
      <td>{{$customer->customerId}}</td>
      <td>{{$customer->FirstName}}</td>
      <td>{{$customer->LastName}}</td>
      
      
      
      <td>
        <a href="{{route('books.show',$book)}}" class="btn btn-success">View</a>
        <a href="{{route('books.edit',$book)}}" class="btn btn-primary"  >Update</a>
        <form action="{{route('books.destroy',$book)}}"method="POST" style="display: contents;">
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

