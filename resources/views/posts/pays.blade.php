@extends('base')
@section('title', 'View')
@section('Main')

<table class="table mt-6" >
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Payment_for</th>
      <th scope="col">Amount</th>
      <th scope="col">CustomerId</th>
      <th scope="col">FirstName</th>
      <th scope="col">LastName</th>
    
   
      <!-- <th scope="col">created_at</th>
      <th scope="col">updated_at</th> -->
    </tr>
  </thead>
  <tbody>
  @foreach($payment as $pay)
    <tr>
      <td>{{$pay->payId}}</td>
      <td>{{$pay->payment_for}}</td>
      <td>{{$pay->Amount}}</td>
      <td>{{$pay->customerId}}</td>
      <td>{{$pay->customers->FirstName}}</td>
      <td>{{$pay->customers->LastName}}</td>
  
      
     
      
      <td>
        <a href="{{route('pays.show',$pay)}}" class="btn btn-success">View</a>
        <a href="{{route('pays.edit',$pay)}}" class="btn btn-primary"  >Update</a>
        <form action="#"method="POST" style="display: contents;">
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